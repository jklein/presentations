import talksData from "@/data/talks.json"
import type { TalksData, Talk } from "./types"

export function getAllTalks(): TalksData {
  return talksData as TalksData
}

export function getTalkBySlug(slug: string): { title: string; data: Talk } | null {
  const talks = getAllTalks()

  for (const year in talks) {
    for (const title in talks[year]) {
      const talk = talks[year][title]
      if (talk.page_link === `/${slug}`) {
        return { title, data: talk }
      }
    }
  }

  return null
}
