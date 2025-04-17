import Link from "next/link"

export function Footer() {
  return (
    <footer className="border-t py-8 bg-muted/40">
      <div className="container mx-auto px-4">
        <div className="flex flex-col md:flex-row justify-center items-center gap-4 md:gap-8">
          <Link href="/" className="hover:text-primary transition-colors">
            All Talks
          </Link>
          <span className="hidden md:inline">•</span>
          <a
            href="http://www.jonathanklein.net"
            target="_blank"
            rel="noopener noreferrer"
            className="hover:text-primary transition-colors"
          >
            Blog
          </a>
          <span className="hidden md:inline">•</span>
          <a
            href="http://www.linkedin.com/in/jnklein"
            target="_blank"
            rel="noopener noreferrer"
            className="hover:text-primary transition-colors"
          >
            LinkedIn
          </a>
          <span className="hidden md:inline">•</span>
          <a
            href="https://twitter.com/jonathanklein"
            target="_blank"
            rel="noopener noreferrer"
            className="hover:text-primary transition-colors"
          >
            Twitter
          </a>
          <span className="hidden md:inline">•</span>
          <a
            href="https://github.com/jklein/"
            target="_blank"
            rel="noopener noreferrer"
            className="hover:text-primary transition-colors"
          >
            GitHub
          </a>
        </div>
      </div>
    </footer>
  )
}
