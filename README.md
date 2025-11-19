# Smart Salon & Beauty Parlour Reservation & Management System

## Project Description
The "Smart Salon & Beauty Parlour Reservation & Management System" is a comprehensive, AI-powered platform designed to revolutionize the beauty and wellness industry. It streamlines the entire business operation for salon owners while providing a personalized and seamless experience for customers.

The system goes beyond traditional booking software by integrating Artificial Intelligence to offer personalized style and beauty recommendations. For customers, it provides an intuitive mobile and web interface to discover services, book appointments with preferred stylists, receive AI-driven suggestions, and manage their beauty profiles. For salon administrators and staff, it offers a powerful dashboard to manage appointments, inventory, staff schedules, customer relationships, and business analytics, all in one place. The core innovation lies in leveraging AI to bridge the gap between customer desires and expert services, making every visit highly personalized and efficient.

## Team & Task Distribution
| Team Member Name | Team Member ID | Assigned Functional Requirements (FRs) |
|---|---|---|
| Riajul Haque Rafi | 0242220005101467 | FR-1, FR-2, FR-21, FR-7 |
| Samiul Hasan Sakib | 0242220005101472 | FR-17, FR-18, FR-22, FR-13, FR-14 |
| Md. Rifat Hossain Shan | 0242220005101477 | FR-3, FR-8, FR-19, FR-6 |
| Mimtaj Hossain Sami | 0242220005101457 | FR-9, FR-10, FR-11, FR-12, FR-16 |
| Anik Kumar Kuri | 0242220005101077 | FR-4, FR-5, FR-15, FR-20 |

## Features

### For Customers:
*   User Registration & Profiles: Secure sign-up and personalized beauty profiles.
*   AI-Powered Beauty Assistant: Chatbot for style recommendations and service queries.
*   Smart Service Discovery: Browse services, view stylist portfolios, and read reviews.
*   Intelligent Booking System: Easy appointment scheduling with real-time availability.
*   Personalized Dashboard: Manage appointments, view history, and save favorite styles.
*   Push & Email Notifications: Reminders for upcoming appointments and exclusive offers.
*   Mobile App: Full booking functionality on the go.

### For Staff & Stylists:
*   Staff Dashboard: View personal schedule, manage customer appointments, and update service status.
*   Customer Management: Access customer history and preferences before appointments.
*   Performance Analytics: Track personal performance and commissions.

### For Administrators:
*   Comprehensive Dashboard: Overview of business performance, revenue, and key metrics.
*   Staff Management: Add/edit staff, manage roles, and set schedules.
*   Service & Inventory Management: Update service menu, prices, and track product inventory.
*   Appointment Oversight: Monitor all bookings, resolve conflicts, and manage the calendar.
*   Advanced Reporting: Generate detailed reports on sales, customer trends, and staff performance.
*   Marketing Tools: Create and send promotional offers to customer segments.

## Installation & Setup Guide

### Prerequisites:
*   Node.js (v16 or above) and npm / Python (v3.8 or above) and pip
*   MongoDB (v4.4 or above) / PostgreSQL (v12 or above)
*   Git

### Steps:
````markdown
### Steps

#### Clone the Repository
```bash
git clone https://github.com/your-username/smartsalon-system.git
cd smartsalon-system
````

#### Backend Setup

```bash
cd backend
npm install  # or: pip install -r requirements.txt for Python
```

#### Environment Configuration

Create a `.env` file in the `backend` directory and add the following variables:

```env
DATABASE_URL=your_database_connection_string
JWT_SECRET=your_super_secret_jwt_key
AI_API_KEY=your_ai_provider_api_key
EMAIL_SERVICE_KEY=your_email_service_key
SMS_SERVICE_KEY=your_sms_service_key
```

#### Database Initialization

Ensure your MongoDB/PostgreSQL server is running.
The application will create necessary collections/tables on first run.

#### Run the Backend Server

```bash
npm start  # or: python app.py / flask run
```

The API server will start on `http://localhost:5000`.

#### Frontend Setup (Web)

```bash
cd ../frontend
npm install
npm start
```

The client will start on `http://localhost:3000`.

#### Mobile App Setup

```bash
cd ../mobile-app
npm install
npx react-native run-android  # or: npx react-native run-ios
```

(Ensure an emulator/device is connected).

## Acknowledgement

We would like to express our profound gratitude and appreciation to our project supervisor, Md. Mezbaul Islam Zion, for his invaluable guidance, unwavering support, and insightful feedback throughout the development of this project. His expertise and encouragement was instrumental in shaping this endeavor.

We are also thankful to our university, Daffodil International University, and the faculty of the CSE for providing us with the necessary resources and a conducive environment for learning and innovation.

Finally, we extend our sincere thanks to our teammates for their dedication, collaboration, and hard work. This project is a testament to our collective effort and shared commitment to excellence.





