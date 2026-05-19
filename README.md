# News-Feed-pulling-post-from-X-handle-to-a-Website-News-page
# Felix Mumo X News Feed

A modern responsive news section that automatically pulls the latest posts from the X (Twitter) account:

@FelixMumo

and displays them on a website as beautiful news cards with:
- Images
- Post titles
- Short descriptions
- Read More buttons

---

# Features

✅ Automatically fetches latest X posts  
✅ Responsive card layout  
✅ Read More button linking to original post  
✅ Dynamic loading using JavaScript  
✅ Modern UI design  
✅ Works on:
- XAMPP
- cPanel Hosting
- Render
- Netlify
- Vercel

---

# Technologies Used

- HTML5
- CSS3
- JavaScript
- RSS Feed
- RSS2JSON API

---

# Setup Instructions

## Step 1 — Generate RSS Feed

Open:

https://rss.app/rss-feed/create-twitter-rss-feed

Paste your X account URL:

```text
https://x.com/FelixMumo

Generate RSS Feed.

Step 2 — Copy RSS Feed URL

Example:

https://rss.app/feeds/v1.1/abc123.xml
Step 3 — Replace RSS URL

Find this line in the code:

const rssUrl =
"https://rss.app/feeds/v1.1/YOUR_FEED_ID.xml";

Replace with your generated RSS feed URL.

Example:

const rssUrl =
"https://rss.app/feeds/v1.1/abc123.xml";
File Structure
project-folder/
│
├── index.html

OR

project-folder/
│
├── index.php
How It Works
The system fetches posts from the X account RSS feed.
RSS feed is converted into JSON format.
Latest posts are displayed dynamically.
Each post appears inside a modern responsive card.
Clicking "Read More" opens the original X post.
Responsive Design

The layout automatically adjusts to:

Desktop
Tablet
Mobile devices
Important Notes
X/Twitter API Restriction

X no longer provides free RSS feeds directly.

This project uses:

RSS.app
RSS2JSON API

to fetch and display posts.

Deployment

You can deploy this project on:

XAMPP
cPanel
Render
Netlify
Vercel
Customization

You can customize:

Colors
Card design
Fonts
Button styles
Number of posts displayed

inside the CSS section.

Author

Felix Mumo

Software Engineer | Tech Specialist | UX/UI Designer

YouTube:
https://www.youtube.com/@FelixMumo-SoftwareEngineerTech
