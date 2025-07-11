# The Artistic Edge 🎨

**A vibrant online art gallery platform connecting artists and enthusiasts with a modern, interactive twist.**


*Empowering creativity, one artwork at a time.*

---

## 📖 Project Overview

The Artistic Edge is a dynamic web platform designed to bridge the gap between artists and art lovers. Built for accessibility and engagement, it allows artists to showcase their portfolios, users to explore stunning artworks, and communities to interact through likes, dislikes, and comments. With a responsive, visually appealing interface, it’s the ultimate digital canvas for creativity.



---

## ✨ Key Features

- **Artist Portal**  
  - Register and manage profiles with ease.  
  - Upload, edit, or delete artworks (price, year, print type, size, edition).  
  - Admin oversight for platform management.

- **User Portal**  
  - Browse artist profiles and galleries without registration.  
  - View high-resolution artworks with LightGallery’s zoom feature.  
  - Initiate purchase inquiries via email or WhatsApp.  

- **Community Engagement**  
  - Like or dislike artworks with real-time counters.  
  - Post and view comments in a sleek modal interface.  
  - AJAX-driven interactions for a seamless experience.

- **Responsive Design**  
  - Built with Bootstrap for flawless display on desktops, tablets, and mobiles.  
  - Elegant modals for artwork details and comments.

---

## 🛠️ Technology Stack

| **Category**       | **Technologies**                              |
|--------------------|-----------------------------------------------|
| **Front-End**      | HTML, CSS, Bootstrap, JavaScript, LightGallery |
| **Back-End**       | PHP (Laravel)                                 |
| **Database**       | MySQL                                         |
| **Tools**          | VS Code, XAMPP, PlantUML                      |

*Styling*: Gradient backgrounds (purple to blue), Roboto font, and smooth animations for a modern aesthetic.

---

---
## Note: This project is just a prototype, it contains some validations and features missing, that's your job now to fix them, ME NO TIME  :) 


## 🚀 Getting Started

### Prerequisites
- PHP >= 8.1
- Composer
- MySQL
- Node.js (for npm dependencies)
- XAMPP (for local server and database)

### Installation
1. **Clone the Repository**
   ```bash
   git clone https://github.com/mzeeshanzafar28/the-artistic-edge.git
   cd artistic-edge
   ```

2. **Install Dependencies**
   ```bash
   composer install
   npm install
   ```

3. **Configure Environment**
   - Copy `.env.example` to `.env`:
     ```bash
     cp .env.example .env
     ```
   - Update `.env` with your database credentials:
     ```env
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=multan_art-gallery
     DB_USERNAME=root
     DB_PASSWORD=
     ```

4. **Run Migrations**
   ```bash
   php artisan migrate
   ```

5. **Start the Server**
   ```bash
   php artisan serve
   ```
   Access the platform at `http://localhost:8000`.

---

## 🎨 How It Works

- **Artists**:  
  - Register/login to access a dashboard.  
  - Upload artworks with details (e.g., price, comment, year).  
  - Manage portfolio and view user interactions (likes, comments).

- **Users**:  
  - Browse galleries and artist profiles without signing up.  
  - Click artworks for LightGallery previews or modals with details.  
  - Like, dislike, or comment (login required for interactions).  
  - Contact artists via email or WhatsApp for inquiries.

- **Admins**:  
  - Manage artist accounts and monitor platform activities.

- **Data Flow**:  
  - Laravel controllers fetch data from MySQL.  
  - Blade templates render responsive UI with Bootstrap.  
  - JavaScript handles modals, LightGallery, and AJAX for reactions/comments.

---

## 🗺️ Entity-Relationship Diagram (ERD)



**Entities**:
- **Artist**: `Artist_ID` (PK), Name, Email, Contact, Bio, Profile_Image
- **Artwork**: `Artwork_ID` (PK), `Artist_ID` (FK), Image_Path, Price, Comment, Year, Print, Print_Size, Edition
- **Admin**: `Admin_ID` (PK), Username, Password
- **ArtworkReaction**: `ID` (PK), `User_ID` (FK), `Artwork_ID` (FK), Reaction (1 for like, -1 for dislike)
- **ArtworkComment**: `ID` (PK), `User_ID` (FK), `Artwork_ID` (FK), Comment

**Relationships**:
- Artist → Artwork (one-to-many)
- Admin → Artist (one-to-many, administrative)
- User → ArtworkReaction/ArtworkComment (one-to-many)

---

## ⚠️ Challenges & Solutions

- **Modal Backdrop Conflicts**  
  *Challenge*: Multiple modal backdrops (Bootstrap and LightGallery).  
  *Solution*: JavaScript to remove `.modal-backdrop` and hide `.lg-backdrop` dynamically.

- **Responsive Design**  
  *Challenge*: Ensuring galleries adapt to all devices.  
  *Solution*: Bootstrap’s grid system and media queries.

- **Community Features**  
  *Challenge*: Seamless like/dislike/comment integration.  
  *Solution*: AJAX with Laravel controllers, unique constraints in `artwork_reactions` table.

---

## 🌟 Future Enhancements

- User accounts for personalized galleries and saved artworks.  
- Direct payment integration for artwork purchases.  
- Community forums or review systems for enhanced engagement.

---

## 🤝 Contributing

We welcome contributions to make The Artistic Edge even better!  
1. Fork the repository.  
2. Create a feature branch (`git checkout -b feature/awesome-feature`).  
3. Commit changes (`git commit -m 'Add awesome feature'`).  
4. Push to the branch (`git push origin feature/awesome-feature`).  
5. Open a pull request.

---

## 📚 References

- [Laravel Documentation](https://laravel.com/docs)
- [Bootstrap Documentation](https://getbootstrap.com/docs/5.3/)
- [LightGallery Documentation](https://www.lightgalleryjs.com/)
- [MySQL Documentation](https://dev.mysql.com/doc/)

---

