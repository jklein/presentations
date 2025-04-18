import { Header } from "@/components/header"
import { Footer } from "@/components/footer"
import { TalkList } from "@/components/talk-list"
import { getAllTalks } from "@/lib/talks"

export default function Home() {
  const talks = getAllTalks()

  return (
    <div className="flex min-h-screen flex-col">
      <Header />
      <main className="flex-1 container mx-auto px-4 py-8">
        <h1 className="text-3xl font-bold text-center mb-8">All Talks</h1>
        <TalkList talks={talks} />
      </main>
      <Footer />
    </div>
  )
}
