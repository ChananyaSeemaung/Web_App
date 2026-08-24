# 🛍️ BeadCraft — Sweetheart Jewelry Shop E-Commerce

**BeadCraft** คือเว็บแอปพลิเคชันร้านค้าออนไลน์สำหรับขายเครื่องประดับลูกปัด พัฒนาขึ้นเพื่อเป็นโปรเจกต์ศึกษาการทำงานของระบบ E-Commerce แบบ Full-Stack ทั้งในส่วนของระบบหน้าร้าน (Front-end) การจัดการฐานข้อมูล (Database Management) และระบบหลังบ้านสำหรับผู้ดูแลระบบ (Admin Dashboard / CRUD)

---

## 🌟 Key Features (ฟีเจอร์หลักของระบบ)

### 🛒 Client-Side (ระบบหน้าร้านสำหรับลูกค้า)
* **Product Catalog:** แสดงรายการสินค้าประเภทสร้อยลูกปัด พร้อมระบบกรองหมวดหมู่
* **Shopping Cart & Checkout:** ระบบตะกร้าสินค้า สรุปรายการคำสั่งซื้อ และคำนวณราคาสินค้า
* **User Authentication:** ระบบสมัครสมาชิก (Register) และเข้าสู่ระบบ (Login)

### 🛡️ Admin-Side (ระบบหลังบ้านสำหรับผู้ดูแลระบบ)
* **CRUD Product Management:** เพิ่ม ลบ แก้ไข และอัปเดตข้อมูลสินค้า
* **Inventory Control:** ระบบจัดการสต็อกสินค้าและแสดงสถานะสินค้าคงเหลือ
* **Order Management:** ตรวจสอบและติดตามสถานะคำสั่งซื้อของลูกค้า

---

## 🛠️ Tech Stack & Tools

* **Front-end:** HTML5, CSS3, Bootstrap 5, JavaScript
* **Back-end:** PHP
* **Database:** MySQL (Managed via phpMyAdmin)
* **Version Control:** Git & GitHub

---

## 📁 Database Structure

ฐานข้อมูลถูกออกแบบร่วมกับ MySQL โดยมีโครงสร้างหลัก ได้แก่:
* `users` — จัดเก็บข้อมูลสมาชิกและสิทธิ์การใช้งาน (Admin / User)
* `products` — จัดเก็บรายละเอียดสินค้า ราคา และสต็อก
* `orders` & `order_details` — จัดเก็บประวัติการสั่งซื้อและรายการสินค้าในแต่ละคำสั่งซื้อ

*(ไฟล์สำรองโครงสร้างฐานข้อมูลระบุอยู่ในโฟลเดอร์ `/database/schema.sql`)*

---

## 📜 Copyright & Portfolio Notice

© 2026 **Chananya Seemaung**. All Rights Reserved.

> **Note:** Source Code นี้ถูกจัดทำและเผยแพร่ขึ้นเพื่อวัตถุประสงค์ในการเป็น **Portfolio Showcase** สำหรับการพิจารณาคัดเลือกเข้าทำงาน/ฝึกงานเท่านั้น ไม่อนุญาตให้นำโค้ด ส่วนหนึ่งส่วนใด หรือทรัพยากรภายในโปรเจกต์นี้ไปทำซ้ำ ดัดแปลง หรือใช้งานในเชิงพาณิชย์โดยไม่ได้รับอนุญาตจากเจ้าของผลงาน