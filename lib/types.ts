export interface Talk {
  event: string
  date: string
  page_link: string
  rate_link?: string
  video_link?: string
  slides_link?: string
  speakerdeck_id?: string
  speakerdeck_ratio?: string
  links?: {
    left?: Record<string, Record<string, string>>
    right?: Record<string, Record<string, string>>
  }
}

export interface TalksData {
  [year: string]: {
    [title: string]: Talk
  }
}
