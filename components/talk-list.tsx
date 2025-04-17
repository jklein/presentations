"use client"

import { useState } from "react"
import Link from "next/link"
import { Card, CardContent, CardHeader, CardTitle } from "@/components/ui/card"
import { Badge } from "@/components/ui/badge"
import type { TalksData } from "@/lib/types"
import { formatDate } from "@/lib/utils"
import { VideoIcon } from "lucide-react"

interface TalkListProps {
  talks: TalksData
}

export function TalkList({ talks }: TalkListProps) {
  // Sort years in descending order
  const sortedYears = Object.keys(talks).sort((a, b) => Number.parseInt(b) - Number.parseInt(a))
  const [expandedYear, setExpandedYear] = useState<string | null>(sortedYears[0])

  return (
    <div className="space-y-6">
      {sortedYears.map((year) => {
        const yearTalks = talks[year]

        // Sort talks by date in descending order
        const sortedTalks = Object.entries(yearTalks).sort((a, b) => {
          const dateA = new Date(a[1].date).getTime()
          const dateB = new Date(b[1].date).getTime()
          return dateB - dateA
        })

        return (
          <Card key={year} className="overflow-hidden">
            <CardHeader
              className="bg-primary/10 cursor-pointer"
              onClick={() => setExpandedYear(expandedYear === year ? null : year)}
            >
              <CardTitle className="flex justify-between items-center">
                <span>{year}</span>
                <Badge variant="outline" className="font-normal">
                  {Object.keys(yearTalks).length} {Object.keys(yearTalks).length === 1 ? "talk" : "talks"}
                </Badge>
              </CardTitle>
            </CardHeader>
            {expandedYear === year && (
              <CardContent className="p-0">
                <div className="divide-y">
                  {sortedTalks.map(([title, data]) => (
                    <Link
                      key={title}
                      href={`/talks${data.page_link}`}
                      className="block p-4 hover:bg-muted/50 transition-colors"
                    >
                      <div className="flex flex-col md:flex-row md:items-center justify-between gap-2">
                        <div className="flex items-start gap-2">
                          {data.video_link && <VideoIcon className="h-5 w-5 text-primary shrink-0 mt-1" />}
                          <div>
                            <h3 className="font-medium">{title}</h3>
                            <p className="text-sm text-muted-foreground">{data.event}</p>
                          </div>
                        </div>
                        <Badge variant="secondary" className="self-start md:self-auto">
                          {formatDate(data.date)}
                        </Badge>
                      </div>
                    </Link>
                  ))}
                </div>
              </CardContent>
            )}
          </Card>
        )
      })}
    </div>
  )
}
