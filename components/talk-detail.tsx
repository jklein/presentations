"use client"

import { useEffect, useRef } from "react"
import Link from "next/link"
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card"
import { Button } from "@/components/ui/button"
import { Badge } from "@/components/ui/badge"
import { Tabs, TabsContent, TabsList, TabsTrigger } from "@/components/ui/tabs"
import { formatDate } from "@/lib/utils"
import type { Talk } from "@/lib/types"
import { ArrowLeft, ExternalLink, Video } from "lucide-react"

interface TalkDetailProps {
  talk: {
    title: string
    data: Talk
  }
}

export function TalkDetail({ talk }: TalkDetailProps) {
  const { title, data } = talk
  const speakerDeckRef = useRef<HTMLDivElement>(null)

  useEffect(() => {
    // Only attempt to load SpeakerDeck if we have an ID
    if (!data.speakerdeck_id || !speakerDeckRef.current) return

    // Clear any existing content
    speakerDeckRef.current.innerHTML = ""

    // Create the script element
    const script = document.createElement("script")
    script.async = true
    script.src = "//speakerdeck.com/assets/embed.js"
    script.className = "speakerdeck-embed"
    script.setAttribute("data-id", data.speakerdeck_id)
    script.setAttribute("data-ratio", data.speakerdeck_ratio || "1.77777777777778")

    // Append the script to the container
    speakerDeckRef.current.appendChild(script)

    // Cleanup function
    return () => {
      if (speakerDeckRef.current) {
        speakerDeckRef.current.innerHTML = ""
      }
    }
  }, [data.speakerdeck_id, data.speakerdeck_ratio])

  return (
    <div className="space-y-8">
      <div className="flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
        <div>
          <Link href="/" className="inline-flex items-center text-sm text-muted-foreground hover:text-primary mb-2">
            <ArrowLeft className="mr-1 h-4 w-4" />
            Back to all talks
          </Link>
          <h1 className="text-3xl font-bold">{title}</h1>
          <div className="flex flex-wrap gap-2 mt-2">
            <Badge variant="outline">{data.event}</Badge>
            <Badge variant="secondary">{formatDate(data.date)}</Badge>
          </div>
        </div>
        <div className="flex flex-wrap gap-2">
          {data.video_link && (
            <Button asChild variant="outline" className="gap-2">
              <a href={data.video_link} target="_blank" rel="noopener noreferrer">
                <Video className="h-4 w-4" />
                Watch Video
              </a>
            </Button>
          )}
          {data.slides_link && (
            <Button asChild variant="outline" className="gap-2">
              <a href={data.slides_link} target="_blank" rel="noopener noreferrer">
                <ExternalLink className="h-4 w-4" />
                View Slides
              </a>
            </Button>
          )}
          {data.rate_link && (
            <Button asChild variant="default" className="gap-2">
              <a href={data.rate_link} target="_blank" rel="noopener noreferrer">
                Rate this talk
              </a>
            </Button>
          )}
        </div>
      </div>

      {data.speakerdeck_id && (
        <Card>
          <CardContent className="p-6">
            <div ref={speakerDeckRef} className="w-full aspect-video" />
          </CardContent>
        </Card>
      )}

      {data.links && (
        <Card>
          <CardHeader>
            <CardTitle>Resources</CardTitle>
            <CardDescription>Useful links and resources related to this talk</CardDescription>
          </CardHeader>
          <CardContent>
            <Tabs defaultValue="left" className="w-full">
              <TabsList className="grid w-full grid-cols-2">
                <TabsTrigger value="left">Resources</TabsTrigger>
                <TabsTrigger value="right">Additional Links</TabsTrigger>
              </TabsList>
              <TabsContent value="left" className="pt-4">
                {data.links.left && (
                  <div className="grid grid-cols-1 md:grid-cols-2 gap-8">
                    {Object.entries(data.links.left).map(([heading, links]) => (
                      <div key={heading}>
                        <h3 className="font-medium mb-2">{heading}</h3>
                        <ul className="space-y-1">
                          {Object.entries(links).map(([url, linkTitle]) => (
                            <li key={url}>
                              <a
                                href={url}
                                target="_blank"
                                rel="noopener noreferrer"
                                className="text-primary hover:underline inline-flex items-center"
                              >
                                {linkTitle}
                                <ExternalLink className="ml-1 h-3 w-3" />
                              </a>
                            </li>
                          ))}
                        </ul>
                      </div>
                    ))}
                  </div>
                )}
              </TabsContent>
              <TabsContent value="right" className="pt-4">
                {data.links.right && (
                  <div className="grid grid-cols-1 md:grid-cols-2 gap-8">
                    {Object.entries(data.links.right).map(([heading, links]) => (
                      <div key={heading}>
                        <h3 className="font-medium mb-2">{heading}</h3>
                        <ul className="space-y-1">
                          {Object.entries(links).map(([url, linkTitle]) => (
                            <li key={url}>
                              <a
                                href={url}
                                target="_blank"
                                rel="noopener noreferrer"
                                className="text-primary hover:underline inline-flex items-center"
                              >
                                {linkTitle}
                                <ExternalLink className="ml-1 h-3 w-3" />
                              </a>
                            </li>
                          ))}
                        </ul>
                      </div>
                    ))}
                  </div>
                )}
              </TabsContent>
            </Tabs>
          </CardContent>
        </Card>
      )}
    </div>
  )
}
