# QuickPOS Assignment — Complete Step-by-Step Guide
## Jira + GitHub + Slack + PHP Code — Everything You Need

---

# PART 1: PROJECT FILE STRUCTURE

```
quickpos-landing/
├── index.php        ← Main landing page (all 6 sections)
├── contact.php      ← PHP form handler (validation + redirect)
├── thank-you.php    ← Success page
├── style.css        ← All CSS styles
├── script.js        ← JS animations and interactions
├── README.md        ← GitHub documentation
└── .gitignore       ← Ignored files list
```

---

# PART 2: HOW TO RUN THE PROJECT LOCALLY

## Step 1 — Install PHP (if not already installed)
### Windows:
Download XAMPP from https://www.apachefriends.org → Install → Start Apache

### Mac:
```bash
brew install php
```

### Ubuntu/Linux:
```bash
sudo apt update && sudo apt install php
```

## Step 2 — Run the project
```bash
cd quickpos-landing
php -S localhost:8000
```
Open browser → http://localhost:8000

## Step 3 — Test the contact form
- Fill out the form → click Send Message
- PHP validates: if empty fields → shows errors
- If valid → redirects to thank-you.php
- Submission gets logged to submissions.log

---

# PART 3: GITHUB SETUP (STEP BY STEP)

## Step 1 — Create Repository
1. Go to https://github.com → New Repository
2. Name: `quickpos-landing`
3. Visibility: Public
4. Check ✅ "Add a README file"
5. Click Create Repository

## Step 2 — Clone to your machine
```bash
git clone https://github.com/YOUR_USERNAME/quickpos-landing.git
cd quickpos-landing
```

## Step 3 — Set up GitFlow branching
```bash
# Create and push develop branch
git checkout -b develop
git push -u origin develop

# Protect main: Go to GitHub → Settings → Branches → Add rule
# Branch name: main → Check "Require pull request before merging"
```

## Step 4 — Work on features (DO THIS FOR EVERY TASK)
```bash
# Always start from develop
git checkout develop
git pull origin develop

# Create your feature branch (name must match Jira ticket)
git checkout -b feature/POS-101-navbar-header

# Make your changes, then:
git add .
git commit -m "[POS-101] Add navbar with logo, links, and signup button"
git push -u origin feature/POS-101-navbar-header
```

## Step 5 — Create a Pull Request
1. Go to your GitHub repo
2. Click "Compare & pull request" banner
3. Title: `[POS-101] Add navbar with logo, links, and signup button`
4. Description: What changed, why, screenshots if any
5. Assign reviewer (your teammate)
6. Click "Create pull request"

## Step 6 — Teammate reviews and approves
1. Reviewer opens the PR
2. Clicks "Files changed" tab — reviews code
3. Adds a comment or approves
4. Clicks "Approve" then "Merge pull request" → merge into develop
5. Delete the feature branch

## Step 7 — Merge to main (end of sprint)
```bash
git checkout main
git merge develop
git push origin main
```

## Full Commit Message Format:
```
[TICKET-NUMBER] Short description of what was done

Examples:
[POS-101] Add responsive navbar with hamburger menu
[POS-102] Build hero section with animated POS mockup
[POS-103] Create 4-card features grid with icons
[POS-104] Add 3-tier pricing table with Pro highlight
[POS-105] Implement PHP contact form with validation
[POS-106] Add footer with social links and copyright
[POS-201] Fix: form not redirecting on empty message field
```

---

# PART 4: JIRA SETUP (STEP BY STEP)

## Step 1 — Create Jira Project
1. Go to https://jira.atlassian.com (free plan works)
2. Create Project → Scrum → Name: "QuickPOS"
3. Project key will be: **POS**

## Step 2 — Create Epics (one per section)
Go to Backlog → Create Epic for each:

| Epic Key | Epic Name                | Color  |
|----------|--------------------------|--------|
| EP-1     | Navigation & Header       | Blue   |
| EP-2     | Hero Section              | Purple |
| EP-3     | Features Section          | Green  |
| EP-4     | Pricing Section           | Orange |
| EP-5     | Contact Us Form           | Red    |
| EP-6     | Footer                    | Teal   |

## Step 3 — Create User Stories under each Epic

### Epic 1 — Navigation & Header
- **POS-101** (Story): As a visitor, I want a sticky navbar so I can navigate sections
  - Task: Create HTML navbar structure
  - Task: Add CSS styling and scroll effect
  - Task: Add mobile hamburger menu

### Epic 2 — Hero Section
- **POS-102** (Story): As a visitor, I want to see an impactful hero section with CTA
  - Task: Write headline and sub-headline copy
  - Task: Build animated POS mockup visual
  - Task: Add "Get Started" and "See How It Works" buttons
  - Task: Add hero stats (uptime, transaction speed, integrations)

### Epic 3 — Features Section
- **POS-103** (Story): As a visitor, I want to understand QuickPOS key features
  - Task: Design 4-column feature card grid
  - Task: Add icons, headings, descriptions for each feature
  - Task: Add hover animation effects

### Epic 4 — Pricing Section
- **POS-104** (Story): As a visitor, I want to compare pricing plans
  - Task: Build 3-tier pricing table layout
  - Task: Highlight Pro plan as "Most Popular"
  - Task: Add feature checklist per plan

### Epic 5 — Contact Form (PHP)
- **POS-105** (Story): As a visitor, I want to send a message to the QuickPOS team
  - Task: Build HTML contact form (name, email, message)
  - Task: Write contact.php POST handler
  - Task: Add PHP server-side validation (empty field check)
  - Task: Create thank-you.php redirect page
  - Task: Write client-side JS validation

### Epic 6 — Footer
- **POS-106** (Story): As a visitor, I want to find social links and legal info
  - Task: Build footer layout with columns
  - Task: Add social media icon links
  - Task: Add copyright with dynamic PHP year

## Step 4 — Create Bugs (when testing reveals issues)
Example bugs to log during testing:
- **POS-201** Bug: Form submits with empty name field
- **POS-202** Bug: Mobile menu does not close on link click
- **POS-203** Bug: Pricing card "Most Popular" badge overflows on mobile

For each bug:
- Priority: High / Medium / Low
- Steps to reproduce
- Expected vs Actual behavior
- Assign to Tech Lead

## Step 5 — Sprint Setup

### Sprint 1 (Week 1) — Core Structure
Pull these tickets into Sprint 1:
- POS-101 (Navbar)
- POS-102 (Hero)
- POS-103 (Features)
- POS-106 (Footer basic)

Sprint 1 Goal: "Complete page skeleton with hero and features visible"

### Sprint 2 (Week 2) — Polish + Forms
Pull these tickets into Sprint 2:
- POS-104 (Pricing)
- POS-105 (Contact Form + PHP)
- POS-201, POS-202, POS-203 (Bug fixes)
- Any leftover from Sprint 1

Sprint 2 Goal: "Complete all sections, PHP form working, all bugs resolved"

## Step 6 — Sprint Ceremonies (Document these!)

### Sprint Planning (Day 1 of each sprint):
- Discuss what goes into the sprint
- Assign story points (1=easy, 3=medium, 5=hard, 8=very hard)
- Screenshot the sprint board at this stage

### Daily Standup (Each day, 5-10 minutes):
Post in Slack:
```
📅 Daily Standup — [Date]
✅ Yesterday: Completed POS-101 navbar structure
🔨 Today: Working on POS-102 hero section
🚧 Blockers: None
```

### Sprint Retrospective (Last day of sprint):
Document in Jira or Slack:
```
🔁 Sprint 1 Retrospective
✅ What went well: Navbar and hero finished on time
🔧 What to improve: Need better branch naming discipline
🎯 Action item: Tech Lead to review PRs within 2 hours
```

---

# PART 5: SLACK SETUP (STEP BY STEP)

## Step 1 — Create Slack Workspace
1. Go to https://slack.com → Create a Workspace
2. Name: "QuickPOS Dev Team"
3. Email both team members

## Step 2 — Create Channels
Create these channels:
- `#general` — general team chat
- `#dev` — code discussions
- `#standup` — daily standup posts
- `#jira-updates` — automated Jira notifications
- `#github-updates` — automated GitHub notifications

## Step 3 — Connect Jira to Slack

### Method A — Jira Slack Integration (Official)
1. In Slack: Go to Apps → Search "Jira Cloud"
2. Install → Connect your Jira project
3. In Jira: Project Settings → Apps → Jira for Slack
4. Select channels for notifications: choose `#jira-updates`
5. Enable: issue created, status changed, sprint started/ended

### Method B — Manual (if official integration isn't free)
Post updates manually in Slack whenever you move a ticket:
```
🎫 [POS-102] Hero Section — moved to IN PROGRESS
Assignee: @teammate
Branch: feature/POS-102-hero-section
```

## Step 4 — Connect GitHub to Slack

### GitHub Slack App (Official)
1. In Slack: Apps → Search "GitHub"
2. Install → Authorize → Connect your repository
3. In the `#github-updates` channel, type:
   ```
   /github subscribe YOUR_USERNAME/quickpos-landing
   ```
4. This sends notifications for: commits, PRs, PR reviews, merges

### Webhook Method (Alternative)
1. GitHub repo → Settings → Webhooks → Add webhook
2. Payload URL: Get from Slack → Apps → Incoming Webhooks
3. Content type: application/json
4. Events: select "Pull requests" and "Pushes"

## Step 5 — Required Slack Posts to Screenshot

### Post 1 — Project Kickoff
```
🚀 QuickPOS Project Kickoff!
📋 Jira board is live: [link]
🔗 GitHub repo created: [link]
🗓️ Sprint 1 starts today — 6 tickets in the board
Team: @you @teammate
```

### Post 2 — Sprint 1 Planning
```
📅 Sprint 1 Planning Complete
🎯 Sprint Goal: Core page structure
Tickets committed:
  • POS-101 Navbar (3pts) → @teammate
  • POS-102 Hero (5pts) → @you
  • POS-103 Features (3pts) → @you
  • POS-106 Footer (2pts) → @teammate
Total: 13 story points
```

### Post 3 — PR Announcement
```
🔀 PR Ready for Review!
Title: [POS-102] Add hero section with animated mockup
Link: https://github.com/YOUR_USERNAME/quickpos-landing/pull/3
Changes: index.php (hero HTML), style.css (hero CSS)
@teammate please review when you get a chance 🙏
```

### Post 4 — Bug Report
```
🐛 Bug Logged: POS-201
Issue: Contact form submits without name field
Priority: High
Steps: Open form → leave Name blank → click Send
Expected: Error message shown
Actual: Form submits to PHP with empty name
Assigned to: @teammate
```

### Post 5 — Sprint Retrospective
```
🔁 Sprint 1 Retrospective Summary

✅ What went well:
  - Finished navbar, hero, features sections on time
  - All PRs reviewed within 3 hours

🔧 What to improve:
  - Write test cases before coding, not after
  - Update Jira ticket status daily

🎯 Action Items:
  - @PM to add test cases to every ticket by Day 1
  - @TechLead to enforce PR reviews before merge
```

---

# PART 6: TEST CASES (QA ROLE)

Document these as QA in Jira or a spreadsheet:

| Test ID | Test Case                        | Steps                                     | Expected Result                    | Pass/Fail |
|---------|----------------------------------|-------------------------------------------|------------------------------------|-----------|
| TC-01   | Page loads correctly             | Open index.php in browser                 | All sections visible, no errors    |           |
| TC-02   | Navigation links scroll          | Click "Features", "Pricing", "Contact"   | Page scrolls to correct section    |           |
| TC-03   | Sign Up button works             | Click "Sign Up Free" in navbar            | Scrolls to Contact section         |           |
| TC-04   | Form empty name validation       | Submit form with empty Name field         | Error shown, form not submitted    |           |
| TC-05   | Form empty email validation      | Submit with empty Email field             | Error shown, form not submitted    |           |
| TC-06   | Form invalid email format        | Submit with "notanemail" in Email         | Error shown, form not submitted    |           |
| TC-07   | Form empty message validation    | Submit with empty Message field           | Error shown, form not submitted    |           |
| TC-08   | Successful form submission       | Fill all fields correctly → Submit        | Redirected to thank-you.php        |           |
| TC-09   | Thank you page displays          | After successful form submit              | Thank you page with steps shown    |           |
| TC-10   | Mobile menu opens                | Resize to mobile → click hamburger        | Mobile menu slides open            |           |
| TC-11   | Mobile menu closes on link       | On mobile menu → click "Features"         | Menu closes, page scrolls          |           |
| TC-12   | Responsive on mobile             | Open on 375px width screen               | No overflow, all content readable  |           |
| TC-13   | Navbar scrolled state            | Scroll down 100px                         | Navbar gets dark background        |           |
| TC-14   | Pricing Pro card is highlighted  | View pricing section                      | Pro card is larger, has badge      |           |

---

# PART 7: WHAT TO SCREENSHOT FOR SUBMISSION

## Jira Screenshots Needed:
1. ✅ Backlog with all Epics and Stories visible
2. ✅ Sprint 1 board (To Do / In Progress / Done columns)
3. ✅ Sprint 2 board (completed)
4. ✅ A single ticket open (e.g., POS-102) showing description, assignee, story points
5. ✅ Burndown chart for Sprint 1
6. ✅ Burndown chart for Sprint 2
7. ✅ A bug ticket (e.g., POS-201) with full details

## GitHub Screenshots Needed:
1. ✅ Repository main page showing all files
2. ✅ Branches list (showing feature/, bugfix/, develop, main)
3. ✅ A Pull Request open with description and review comments
4. ✅ A closed/merged PR showing the review was approved
5. ✅ Commit history showing [POS-XXX] messages
6. ✅ Network graph (Insights → Network) showing branching

## Slack Screenshots Needed:
1. ✅ The workspace with all channels visible
2. ✅ The #github-updates channel with automated PR/commit notifications
3. ✅ The #standup channel with daily standup messages
4. ✅ A sprint planning summary message
5. ✅ A PR review request message
6. ✅ The retrospective summary message

---

# PART 8: VIDEO DEMONSTRATION SCRIPT

Record a 3-5 minute screen recording showing:

1. **Open Jira** (30 sec)
   - Show the backlog with all epics and stories
   - Open POS-102 (Hero Section) ticket

2. **Open GitHub** (60 sec)
   - Show the feature/POS-102-hero-section branch
   - Open the Pull Request for that branch
   - Show the commit message "[POS-102] Add hero section..."
   - Show the review/approval comment
   - Show that it's merged to develop

3. **Show the code** (30 sec)
   - Open index.php, show the hero section HTML
   - Open contact.php, show the validation logic

4. **Open the live page** (60 sec)
   - Show the full landing page scrolling through all sections
   - Test the contact form: submit empty → show errors
   - Submit filled form → show thank-you.php redirect

5. **Open Slack** (30 sec)
   - Show the #github-updates channel with notifications
   - Show the #standup channel

---

# PART 9: GRADING CHECKLIST

## Product Grade (50%)
- [x] Professional, modern UI with dark theme
- [x] Responsive (mobile + desktop)
- [x] Navigation with logo, links, Sign Up button
- [x] Hero section with headline + CTA + mockup visual
- [x] Features section with 4 features + icons + descriptions
- [x] Pricing section with 3 tiers (Basic/Pro/Enterprise)
- [x] Contact form with Name, Email, Message fields
- [x] PHP contact.php with POST handling
- [x] PHP validation for empty fields
- [x] Redirect to thank-you.php on success
- [x] Footer with social links + copyright

## Process Grade (50%)
- [ ] Jira: All Epics created (6 epics)
- [ ] Jira: User stories under each epic
- [ ] Jira: 2 sprints completed with planning + retro
- [ ] Jira: Bug tickets logged and resolved
- [ ] Jira: Burndown charts exported
- [ ] GitHub: Formal branching (GitFlow)
- [ ] GitHub: No direct commits to main
- [ ] GitHub: All merges via Pull Requests
- [ ] GitHub: PRs reviewed by teammate
- [ ] GitHub: Commit messages include [POS-XXX] ticket numbers
- [ ] GitHub: README.md with setup instructions
- [ ] Slack: All communication in workspace
- [ ] Slack: Jira notifications in channel
- [ ] Slack: GitHub notifications in channel
- [ ] Slack: Daily standup messages posted
- [ ] Submission: ZIP with code + screenshots + video
