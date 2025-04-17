import { Header } from "@/components/header"
import { Footer } from "@/components/footer"
import { TalkDetail } from "@/components/talk-detail"
import { getAllTalks, getTalkBySlug } from "@/lib/talks"
import { notFound } from "next/navigation"

export function generateStaticParams() {
  const talks = getAllTalks()

  return Object.entries(talks).flatMap(([year, yearTalks]) =>
    Object.entries(yearTalks).map(([title, data]) => ({
      slug: data.page_link.replace("/", ""),
    })),
  )
}

export default function TalkPage({ params }: { params: { slug: string } }) {
  const talk = getTalkBySlug(params.slug)

  if (!talk) {
    notFound()
  }

  return (
    <div className="flex min-h-screen flex-col">
      <Header />
      <main className="flex-1 container mx-auto px-4 py-8">
        <TalkDetail talk={talk} />
      </main>
      <Footer />
    </div>
  )
}
