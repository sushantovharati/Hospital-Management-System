<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find a Doctor | Health Care Hospital</title>
    <link rel="stylesheet" href="..\..\css/common/base.css">
    <link rel="stylesheet" href="..\..\css/common/nav.css">
    <link rel="stylesheet" href="..\..\css/common/footer_h.css">
    <link rel="stylesheet" href="..\..\css/user/find_doctors.css">
</head>

<body class="bg-color">
    <header> <?php include 'user_header.php'; ?> </header>
    
    <main class="main-section">
        <section class="doctors-section montserrat-font">
            <div class="section-title">
                <h2 class="doctor-list-title">Meet Our Specialist Doctors</h2>
            </div>

            <div class="searching-section display-flex">
                <input type="text" name="doctorName" id="doctorName" placeholder="Search by doctor name">
                <select name="doctor-department" id="doctor-department">
                    <option value="selectdepartment">Select Department</option>
                    <option value="Cardiologist">Cardiologist</option>
                </select>
            </div>

            <div class="doctors-list">
                <div class="doctor-card display-flex">
                    <img src="image/doctors/doctor1.png" alt="Dr. Asif Sayed">
                    <div class="doctor-info">
                        <h3>Dr. Asif Sayed</h3>
                        <p class="roboto-font">MBBS, FCPS (Medicine) <br>
                            Consultant, Internal Medicine</p>
                        <button class="book-btn montserrat-font">Book Appointment</button>
                    </div>
                </div>
                <div class="doctor-card display-flex">
                    <img src="image/doctors/doctor2.png" alt="Dr. Abdullah Al Fahad">
                    <div class="doctor-info">
                        <h3>Dr. Abdullah Al Fahad</h3>
                        <p class="roboto-font">MBBS, MS (Orthopedics) <br>
                            Specialist, Bone & Joint Surgery</p>
                        <button class="book-btn montserrat-font">Book Appointment</button>
                    </div>
                </div>
                <div class="doctor-card display-flex">
                    <img src="image/doctors/doctor3.png" alt="Dr. Taki Yashir">
                    <div class="doctor-info">
                        <h3>Dr. Taki Yashir</h3>
                        <p class="roboto-font">MBBS, MD (Cardiology) <br>
                            Cardiologist</p>
                        <button class="book-btn montserrat-font">Book Appointment</button>
                    </div>
                </div>
                <div class="doctor-card display-flex">
                    <img src="image/doctors/doctor4.png" alt="Dr. Anupom Voumik">
                    <div class="doctor-info">
                        <h3>Dr. Anupom Voumik</h3>
                        <p class="roboto-font">MBBS, MS (ENT) <br>
                            ENT & Head-Neck Surgeon</p>
                        <button class="book-btn montserrat-font">Book Appointment</button>
                    </div>
                </div>
                <div class="doctor-card display-flex">
                    <img src="image/doctors/doctor1.png" alt="Dr. Md. Mahmud Hasan">
                    <div class="doctor-info">
                        <h3>Dr. Md. Mahmud Hasan</h3>
                        <p class="roboto-font">MBBS, FCPS (Medicine) <br>
                            Consultant, Internal Medicine</p>
                        <button class="book-btn montserrat-font">Book Appointment</button>
                    </div>
                </div>
                <div class="doctor-card display-flex">
                    <img src="image/doctors/doctor19.png" alt="Dr. Mahfuz Rahman">
                    <div class="doctor-info">
                        <h3>Dr. Mahfuz Rahman</h3>
                        <p class="roboto-font">MBBS, FCPS (Orthopedics) <br>
                            Bone & Joint Specialist</p>
                        <button class="book-btn montserrat-font">Book Appointment</button>
                    </div>
                </div>
                <div class="doctor-card display-flex">
                    <img src="image/doctors/doctor20.png" alt="Dr. Jannat Ara">
                    <div class="doctor-info">
                        <h3>Dr. Jannat Ara</h3>
                        <p class="roboto-font">MBBS, FCPS (Cardiology) <br>
                            Heart & Vascular Specialist</p>
                        <button class="book-btn montserrat-font">Book Appointment</button>
                    </div>
                </div>
                <div class="doctor-card display-flex">
                    <img src="image/doctors/doctor21.png" alt="Dr. Abir Hossain">
                    <div class="doctor-info">
                        <h3>Dr. Abir Hossain</h3>
                        <p class="roboto-font">MBBS, MS (ENT) <br>
                            Ear, Nose & Throat Specialist</p>
                        <button class="book-btn montserrat-font">Book Appointment</button>
                    </div>
                </div>
                <div class="doctor-card display-flex">
                    <img src="image/doctors/doctor22.png" alt="Dr. Sabiha Yasmin">
                    <div class="doctor-info">
                        <h3>Dr. Sabiha Yasmin</h3>
                        <p class="roboto-font">MBBS, DCH <br>
                            Child & Neonatal Specialist</p>
                        <button class="book-btn montserrat-font">Book Appointment</button>
                    </div>
                </div>
                <div class="doctor-card display-flex">
                    <img src="image/doctors/doctor23.png" alt="Dr. Nasir Uddin">
                    <div class="doctor-info">
                        <h3>Dr. Nasir Uddin</h3>
                        <p class="roboto-font">MBBS, MS (Dermatology) <br>
                            Skin & Hair Specialist</p>
                        <button class="book-btn montserrat-font">Book Appointment</button>
                    </div>
                </div>
                <div class="doctor-card display-flex">
                    <img src="image/doctors/doctor24.png" alt="Dr. Samira Chowdhury">
                    <div class="doctor-info">
                        <h3>Dr. Samira Chowdhury</h3>
                        <p class="roboto-font">MBBS, FCPS (Gastroenterology) <br>
                            Stomach & Liver Specialist</p>
                        <button class="book-btn montserrat-font">Book Appointment</button>
                    </div>
                </div>
                <div class="doctor-card display-flex">
                    <img src="image/doctors/doctor25.png" alt="Dr. Tanvir Alam">
                    <div class="doctor-info">
                        <h3>Dr. Tanvir Alam</h3>
                        <p class="roboto-font">MBBS, MS (Urology) <br>
                            Urinary & Prostate Specialist</p>
                        <button class="book-btn montserrat-font">Book Appointment</button>
                    </div>
                </div>
                <div class="doctor-card display-flex">
                    <img src="image/doctors/doctor26.png" alt="Dr. Laila Khan">
                    <div class="doctor-info">
                        <h3>Dr. Laila Khan</h3>
                        <p class="roboto-font">MBBS, FCPS (Ophthalmology) <br>
                            Eye Specialist & Surgeon</p>
                        <button class="book-btn montserrat-font">Book Appointment</button>
                    </div>
                </div>
                <div class="doctor-card display-flex">
                    <img src="image/doctors/doctor27.png" alt="Dr. Arif Mahmud">
                    <div class="doctor-info">
                        <h3>Dr. Arif Mahmud</h3>
                        <p class="roboto-font">MBBS, FCPS (Pulmonology) <br>
                            Chest & Asthma Specialist</p>
                        <button class="book-btn montserrat-font">Book Appointment</button>
                    </div>
                </div>
                <div class="doctor-card display-flex">
                    <img src="image/doctors/doctor28.png" alt="Dr. Nabila Haque">
                    <div class="doctor-info">
                        <h3>Dr. Nabila Haque</h3>
                        <p class="roboto-font">MBBS, MS (Rheumatology) <br>
                            Arthritis & Autoimmune Specialist</p>
                        <button class="book-btn montserrat-font">Book Appointment</button>
                    </div>
                </div>
                <div class="doctor-card display-flex">
                    <img src="image/doctors/doctor2.png" alt="Dr. Farhana Rahman">
                    <div class="doctor-info">
                        <h3>Dr. Farhana Rahman</h3>
                        <p class="roboto-font">MBBS, MS (Gynecology & Obstetrics) <br>
                            Specialist, Gynecology & Obstetrics</p>
                        <button class="book-btn montserrat-font">Book Appointment</button>
                    </div>
                </div>
                <div class="doctor-card display-flex">
                    <img src="image/doctors/doctor3.png" alt="Dr. Abdullah Al Mamun">
                    <div class="doctor-info">
                        <h3>Dr. Abdullah Al Mamun</h3>
                        <p class="roboto-font">MBBS, MD (Cardiology) <br>
                            Cardiologist</p>
                        <button class="book-btn montserrat-font">Book Appointment</button>
                    </div>
                </div>
                <div class="doctor-card display-flex">
                    <img src="image/doctors/doctor4.png" alt="Dr. Nusrat Jahan">
                    <div class="doctor-info">
                        <h3>Dr. Nusrat Jahan</h3>
                        <p class="roboto-font">MBBS, FCPS (Dermatology) <br>
                            Skin & Venereal Specialist</p>
                        <button class="book-btn montserrat-font">Book Appointment</button>
                    </div>
                </div>
                <div class="doctor-card display-flex">
                    <img src="image/doctors/doctor5.png" alt="Dr. Rashedul Karim">
                    <div class="doctor-info">
                        <h3>Dr. Rashedul Karim</h3>
                        <p class="roboto-font">MBBS, MS (Orthopedics) <br>
                            Bone & Joint Surgeon</p>
                        <button class="book-btn montserrat-font">Book Appointment</button>
                    </div>
                </div>
                <div class="doctor-card display-flex">
                    <img src="image/doctors/doctor6.png" alt="Dr. Samia Akter">
                    <div class="doctor-info">
                        <h3>Dr. Samia Akter</h3>
                        <p class="roboto-font">MBBS, MS (ENT) <br>
                            ENT & Head-Neck Surgeon</p>
                        <button class="book-btn montserrat-font">Book Appointment</button>
                    </div>
                </div>
                <div class="doctor-card display-flex">
                    <img src="image/doctors/doctor7.png" alt="Dr. Kazi Shafiqur Rahman">
                    <div class="doctor-info">
                        <h3>Dr. Kazi Shafiqur Rahman</h3>
                        <p class="roboto-font">MBBS, MD (Neurology) <br>
                            Neurologist</p>
                        <button class="book-btn montserrat-font">Book Appointment</button>
                    </div>
                </div>
                <div class="doctor-card display-flex">
                    <img src="image/doctors/doctor11.png" alt="Dr. Rafiq Ahmed">
                    <div class="doctor-info">
                        <h3>Dr. Rafiq Ahmed</h3>
                        <p class="roboto-font">MBBS, FCPS (Surgery) <br>
                            General & Laparoscopic Surgeon</p>
                        <button class="book-btn montserrat-font">Book Appointment</button>
                    </div>
                </div>
                <div class="doctor-card display-flex">
                    <img src="image/doctors/doctor12.png" alt="Dr. Mita Sultana">
                    <div class="doctor-info">
                        <h3>Dr. Mita Sultana</h3>
                        <p class="roboto-font">MBBS, DGO <br>
                            Specialist, Gynecology & Infertility</p>
                        <button class="book-btn montserrat-font">Book Appointment</button>
                    </div>
                </div>
                <div class="doctor-card display-flex">
                    <img src="image/doctors/doctor13.png" alt="Dr. Kamrul Islam">
                    <div class="doctor-info">
                        <h3>Dr. Kamrul Islam</h3>
                        <p class="roboto-font">MBBS, FCPS (Nephrology) <br>
                            Kidney & Dialysis Specialist</p>
                        <button class="book-btn montserrat-font">Book Appointment</button>
                    </div>
                </div>
                <div class="doctor-card display-flex">
                    <img src="image/doctors/doctor14.png" alt="Dr. Shirin Akhter">
                    <div class="doctor-info">
                        <h3>Dr. Shirin Akhter</h3>
                        <p class="roboto-font">MBBS, FCPS (Endocrinology) <br>
                            Diabetes & Hormone Specialist</p>
                        <button class="book-btn montserrat-font">Book Appointment</button>
                    </div>
                </div>
                <div class="doctor-card display-flex">
                    <img src="image/doctors/doctor15.png" alt="Dr. Abdullah Noman">
                    <div class="doctor-info">
                        <h3>Dr. Abdullah Noman</h3>
                        <p class="roboto-font">MBBS, MS (Neurosurgery) <br>
                            Brain & Spine Surgeon</p>
                        <button class="book-btn montserrat-font">Book Appointment</button>
                    </div>
                </div>
                <div class="doctor-card display-flex">
                    <img src="image/doctors/doctor16.png" alt="Dr. Faria Haque">
                    <div class="doctor-info">
                        <h3>Dr. Faria Haque</h3>
                        <p class="roboto-font">MBBS, MS (Plastic Surgery) <br>
                            Cosmetic & Reconstructive Surgeon</p>
                        <button class="book-btn montserrat-font">Book Appointment</button>
                    </div>
                </div>
                <div class="doctor-card display-flex">
                    <img src="image/doctors/doctor17.png" alt="Dr. Saiful Islam">
                    <div class="doctor-info">
                        <h3>Dr. Saiful Islam</h3>
                        <p class="roboto-font">MBBS, FCPS (Psychiatry) <br>
                            Mental Health & Psychiatry Specialist</p>
                        <button class="book-btn montserrat-font">Book Appointment</button>
                    </div>
                </div>
                <div class="doctor-card display-flex">
                    <img src="image/doctors/doctor18.png" alt="Dr. Nafisa Karim">
                    <div class="doctor-info">
                        <h3>Dr. Nafisa Karim</h3>
                        <p class="roboto-font">MBBS, MS (Oncology) <br>
                            Cancer Specialist</p>
                        <button class="book-btn montserrat-font">Book Appointment</button>
                    </div>
                </div>
                <div class="doctor-card display-flex">
                    <img src="image/doctors/doctor8.png" alt="Dr. Tahmina Sultana">
                    <div class="doctor-info">
                        <h3>Dr. Tahmina Sultana</h3>
                        <p class="roboto-font">MBBS, FCPS (Pediatrics) <br>
                            Child Specialist</p>
                        <button class="book-btn montserrat-font">Book Appointment</button>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer> <?php include 'user_footer.php'; ?> </footer>

    <script src="../../js/finddoctors.js"></script>
</body>

</html>