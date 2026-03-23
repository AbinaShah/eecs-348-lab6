# Lab 6 Submission Checklist

## Requirements - All Met ✓

| Requirement | Status |
|-------------|--------|
| Practice 1: Name, photo, contact, link, video | ✓ |
| Practice 2: Dummy text + RGB fields for paragraph & border + border width | ✓ |
| Practice 3: Password 2x, alert if <8 chars or mismatch | ✓ |
| Practice 4: PHP mult table, row/column indexes, receives number | ✓ |

---

## What to Submit (Text Box)

When you submit on Canvas (or whatever LMS), you typically have 2 text boxes. Put:

**Box 1 - GitHub:**
```
https://github.com/YOUR_USERNAME/lab6-eecs348
```
(Use your actual repo URL)

**Box 2 - EECS People:**
```
https://people.eecs.ku.edu/~YOUR_KU_ID/
```
(Replace YOUR_KU_ID with your KU network ID, e.g. abinaarshad or whatever you use to log in)

---

## SSH / Cycle Server Steps

### 1. Connect to cycle server
```bash
ssh YOUR_KU_ID@cycle1.eecs.ku.edu
```
(Use your KU username and password)

### 2. Go to public_html
```bash
cd ~/public_html
```
If it doesn't exist: `mkdir public_html` then `cd public_html`

### 3. Get permission script (first time only)
```bash
wget people.eecs.ku.edu/~l367r860/grant_permission.sh
bash grant_permission.sh
```

### 4. Upload your files
Upload all these files into public_html:
- index.html
- practice1.html
- practice2.html
- practice2.js
- practice3.html
- practice3.js
- practice4.php
- style.css
- profile.png

Ways to upload:
- **scp** from your Mac: `scp -r "/Users/abinaarshad/lab 6.eecs 348"/* YOUR_KU_ID@cycle1.eecs.ku.edu:~/public_html/`
- **FileZilla** or **Cyberduck** (SFTP, connect to cycle1.eecs.ku.edu)
- **VS Code Remote SSH** - connect then drag files

### 5. Fix index link for Practice 4
The instructor's wget index links to practice4.html. You have practice4.php. Either:
- Use YOUR index.html (upload it and it will replace the wget one), or
- Edit the index to change practice4.html → practice4.php

### 6. Set permissions
```bash
cd ~/public_html
bash grant_permission.sh
```

### 7. Test
Open: https://people.eecs.ku.edu/~YOUR_KU_ID/

Click through all 4 practices. Make sure Practice 4 (multiply table) loads and works.

---

## GitHub Steps

1. Create a new repo on github.com (e.g. "lab6-eecs348")
2. Push your lab folder to it:
```bash
cd "/Users/abinaarshad/lab 6.eecs 348"
git init
git add .
git commit -m "Lab 6"
git branch -M main
git remote add origin https://github.com/YOUR_USERNAME/lab6-eecs348.git
git push -u origin main
```
3. Make sure the repo is public (or add the TA as collaborator if private)
