# PANDUAN ARSITEKTUR INFORMASI, COPYWRITING, DAN REKOMENDASI IMPLEMENTASI WEB
## Lembaga Dakwah Kampus (LDK) Al-Madaniah Universitas Bangka Belitung

---

## 1. PENDAHULUAN & LATAR BELAKANG RISET

### 1.1 Profil Entitas LDK Al-Madaniah UBB
Unit Kegiatan Mahasiswa (UKM) **Lembaga Dakwah Kampus (LDK) Al-Madaniah Universitas Bangka Belitung** adalah organisasi kerohanian Islam resmi di lingkungan Universitas Bangka Belitung (UBB). Organisasi ini mewadahi seluruh mahasiswa muslim di tingkat universitas dan berakar pada nilai-nilai dakwah Islam yang *rahmatan lil 'alamin*, moderat, ilmiah, dan berorientasi pada pembangunan karakter peradaban (*madani*).

UBB didirikan pada tanggal 9 Februari 2006 dan resmi beralih status menjadi Perguruan Tinggi Negeri (PTN) pada 21 November 2010. Seiring perkembangan kampus yang dijuluki **"Kampus Peradaban"** di **Bumi Serumpun Sebalai**, LDK Al-Madaniah berperan strategis sebagai pilar pembinaan spiritual, moral, dan kepemimpinan mahasiswa.

Episentrum aktivitas LDK Al-Madaniah berpusat di **Masjid Kampus Al-Madaniah UBB** (Kampus Terpadu Balunijuk). Pembangunan masjid modern ini dirancang melalui karya kolaborasi mahasiswa dan dosen Fakultas Teknik (Teknik Sipil, Arsitektur, dan PWK) serta diresmikan peletakan batu pertamanya oleh ulama internasional asal Yaman, Habib Ali Bin Hasan Bilfaqih, bersama Rektor UBB Dr. Ibrahim, M.Si., MUI Babel, dan jajaran pemerintah daerah.

### 1.2 Tujuan Dokumen Rekomendasi
Dokumen ini disusun sebagai cetak biru (*blueprint*) menyeluruh untuk memigrasikan dan mengembangkan website berbasis repositori Laravel (`ldksyahid-app`), mentransformasi identitas lama (UIN Syarif Hidayatullah Jakarta / LDK Syahid) menjadi identitas resmi, otentik, dan adaptif bagi **LDK Al-Madaniah Universitas Bangka Belitung**.

Panduan ini memuat:
1. **Rumusan Copywriting Utama**: Headline, Hero Banner, Sub-headline, Value Proposition, dan Call to Action (CTA).
2. **Narasi Identitas Organisasi**: Slogan, Trilogi Nilai Karakter Madani, Sejarah Perjalanan, Visi, dan Lima Pilar Misi.
3. **Arsitektur Informasi & Navigasi Web**: Sitemap hirarkis, skema menu desktop & mobile, dan pemetaan halaman/fitur.
4. **Katalog Divisi & Bidang**: Pengurus Pusat (11 bidang/biro) dan LDK 6 Fakultas di lingkungan UBB.
5. **Agenda & Program Kerja Unggulan**: CIRAMA, Islamic Fair, Tahsin Al-Qur'an, Mentoring AAI, Rihlah Alam, dsb.
6. **FAQ (Frequently Asked Questions)** komprehensif untuk sivitas akademika, kader, dan publik umum.
7. **Direktori Kontak Resmi**: Alamat Balunijuk, email terverifikasi, saluran media sosial, dan nomor narahubung.
8. **Rekomendasi Implementasi Teknis**: Pembaruan Blade template, CSS theme styling, penyesuaian seeder/database, dan parameter lokal (jadwal sholat zona Merawang/Bangka).

---

## 2. RUMUSAN COPYWRITING UTAMA & HERO BANNER

### 2.1 Hero Banner Slider & Copywriting Beranda (Homepage)

Sistem landing page web LDK Al-Madaniah UBB mengadopsi struktur hero banner dinamis (3 slide rotasi) yang kompak, proporsional pada layar desktop tanpa menutupi visual latar belakang, serta dilengkapi teks pendukung yang lugas dan menggerakkan aksi.

---

#### Slide 1 — Identitas Utama & Spirit Organisasi (Default Hero)
* **Badge / Kicker**: `✨ #KitaAdalahSaudara | Selamat Datang di Portal Resmi`
* **Headline**:  
  # **LDK Al-Madaniah UBB**
* **Sub-headline**:  
  ### **Muslim Muda Arsitek Peradaban**
* **Body / Narasi Pendukung**:  
  Wadah resmi pembinaan keislaman, penguatan ukhuwah, dan pengembangan potensi mahasiswa di Universitas Bangka Belitung. Berpusat di Masjid Kampus Al-Madaniah untuk mencetak intelektual berkarakter mulia di Bumi Serumpun Sebalai.
* **Primary Call to Action (CTA)**:  
  * Teks: **Kenali Kami Lebih Dekat**  
  * URL Target: `#about` atau `/about/profile`  
  * Ikon: `<i class="fas fa-info-circle me-2"></i>`  
  * Gaya: Tombol Solid Primary (`btn-primary-gradient`)
* **Secondary Call to Action (CTA)**:  
  * Teks: **Gabung Sahabat Al-Madaniah**  
  * URL Target: `/events` atau link registrasi kader `/register`  
  * Ikon: `<i class="fas fa-user-plus me-2"></i>`  
  * Gaya: Tombol Outline / Translucent Light (`btn-outline-light`)
* **Aset Visual Pendukung**: Foto panorama gerbang & boulevard Kampus Terpadu Balunijuk UBB (`kampus-ubb-balunijuk.jpg`).

---

#### Slide 2 — Syiar Akbar & Kemasjidan (Ramadhan & Kajian)
* **Badge / Kicker**: `🌙 Semarak Dakwah Kampus Peradaban`
* **Headline**:  
  # **Semarak CIRAMA & Syiar Islam**
* **Sub-headline**:  
  ### **Cita Rasa Ramadhan di Masjid Al-Madaniah UBB**
* **Body / Narasi Pendukung**:  
  Menghidupkan bulan suci dan syiar hari besar Islam melalui Kajian Inspiratif, Buka Puasa Bersama Ormawa KM UBB, Bimbingan Tahsin Al-Qur'an, Santunan Peduli Ummat, dan Iktikaf Berjamaah.
* **Primary Call to Action (CTA)**:  
  * Teks: **Jelajahi Agenda Kegiatan**  
  * URL Target: `/events`  
  * Ikon: `<i class="fas fa-calendar-alt me-2"></i>`  
  * Gaya: Tombol Solid Primary
* **Secondary Call to Action (CTA)**:  
  * Teks: **Salurkan Infaq Ramadhan**  
  * URL Target: `/celengan-syahid` (atau alias `/celengan-madaniah`)  
  * Ikon: `<i class="fas fa-hand-holding-heart me-2"></i>`  
  * Gaya: Tombol Accent Warm
* **Aset Visual Pendukung**: Dokumentasi Safari Dakwah dan tausiyah akbar di dalam Masjid Al-Madaniah UBB (`masjid-almadaniah-safari.jpeg`).

---

#### Slide 3 — Sinergi Ormawa & Pemberdayaan Sivitas
* **Badge / Kicker**: `🤝 Kolaborasi & Prestasi Mahasiswa`
* **Headline**:  
  # **Sinergi Membangun Generasi Unggul**
* **Sub-headline**:  
  ### **Ukhuwah Nyata di 6 Fakultas Universitas Bangka Belitung**
* **Body / Narasi Pendukung**:  
  Menghubungkan simpul dakwah mahasiswa di Fakultas Teknik, FPPB, FEB, Hukum, FISIP, hingga FKIK. Mengasah kepemimpinan, kepedulian sosial, serta karya ilmiah Islami untuk negeri.
* **Primary Call to Action (CTA)**:  
  * Teks: **Baca Warta & Artikel**  
  * URL Target: `/news`  
  * Ikon: `<i class="fas fa-newspaper me-2"></i>`  
  * Gaya: Tombol Solid Primary
* **Secondary Call to Action (CTA)**:  
  * Teks: **Layanan Persuratan & Kestari**  
  * URL Target: `/service`  
  * Ikon: `<i class="fas fa-file-signature me-2"></i>`  
  * Gaya: Tombol Glassmorphism
* **Aset Visual Pendukung**: Foto rihlah alam kader di kawasan alam Bangka / kegiatan kemahasiswaan UBB (`kegiatan-mahasiswa-ubb.jpeg`).

---

### 2.2 Slogan & Value Proposition Matrix

| Elemen Kunci | Rumusan Teks Bahasa Indonesia | Konteks & Makna Filosofis |
|---|---|---|
| **Slogan Utama (Grand Tagline)** | *"Muslim Muda Arsitek Peradaban"* | Mengafirmasi peran mahasiswa muslim UBB bukan sekadar penikmat zaman, melainkan perancang aktif peradaban masa depan yang bermartabat, inovatif, dan berakhlak. |
| **Slogan Ukhuwah** | *"#KitaAdalahSaudara"* | Menegaskan asas persaudaraan tanpa sekat kedaerahan, jurusan, maupun latar belakang; mencerminkan semboyan daerah Kepulauan Bangka Belitung *Serumpun Sebalai*. |
| **Brand Positioning** | Pusat Pembinaan Karakter Madani & Syiar Islam Terpadu Mahasiswa UBB | Menjadi episentrum dakwah yang inklusif, merangkul seluruh sivitas akademika, dan menjadi mitra sinergis ormawa kampus. |
| **Tone of Voice** | Santun, Semangat Muda, Berwawasan Ilmiah, Mengayomi, dan Solutif | Bahasa komunikatif yang ramah bagi mahasiswa gen-Z, menghindari nada kaku atau eksklusif, tetap menjunjung tinggi adab Islami. |

---

## 3. PROFIL NARATIF "TENTANG KAMI" (ABOUT US)

Bagian ini dirancang siap diintegrasikan langsung ke dalam komponen tab navigasi Beranda (`landing-page.home.partials.about.index`) maupun halaman profil mandiri (`/about`).

```
                              ┌─────────────────────────┐
                              │    LDK AL-MADANIAH      │
                              │       Pusat UBB         │
                              └────────────┬────────────┘
                                           │
         ┌───────────────┬─────────────────┼────────────────┬───────────────┐
         │               │                 │                │               │
   ┌─────┴─────┐   ┌─────┴─────┐     ┌─────┴─────┐    ┌─────┴─────┐   ┌─────┴─────┐
   │  LDK-FT   │   │ LDK-FPPB  │     │  LDK-FEB  │    │  LDK-FH   │   │ LDK-FISIP │ (dan FKIK)
   │  Teknik   │   │ Pertanian │     │  Ekonomi  │    │   Hukum   │   │   ISIP    │
   └───────────┘   └───────────┘     └───────────┘    └───────────┘   └───────────┘
```

### 3.1 Narasi Pengantar (Perkenalan Singkat)
> **Lembaga Dakwah Kampus (LDK) Al-Madaniah Universitas Bangka Belitung** adalah Unit Kegiatan Mahasiswa (UKM) bidang kerohanian Islam resmi di kampus Universitas Bangka Belitung (UBB). Berpusat di **Masjid Kampus Al-Madaniah UBB**, organisasi ini hadir sebagai rumah pembinaan ruhiyah, intelektualitas, dan kepemimpinan moral bagi seluruh sivitas akademika di Kampus Peradaban Balunijuk.  
>  
> Bersama spirit persaudaraan `#KitaAdalahSaudara` dan semboyan `Muslim Muda Arsitek Peradaban`, LDK Al-Madaniah menyelenggarakan berbagai aktivitas keislaman yang sejuk, terbuka, dan berdampak: mulai dari Asistensi Agama Islam (AAI), kelas Tahsin Al-Qur'an gratis, Kajian Rutin, Seminar Kemuslimahan Annisa Center, Syiar Akbar CIRAMA, hingga bakti sosial peduli dhuafa di Bumi Serumpun Sebalai.

---

### 3.2 Narasi Sejarah & Milestones Organisasi
Perjalanan LDK Al-Madaniah UBB terangkum dalam 3 fase historis penting:

1. **Fase Perintisan & Pengkaderan Awal (Tahun 2006–2009)**  
   Berdirinya Universitas Bangka Belitung pada tanggal 9 Februari 2006 memicu kerinduan para mahasiswa perintis untuk menghadirkan wadah berkumpul, menuntut ilmu agama, dan membina moralitas kampus. Sekelompok mahasiswa lintas program studi menginisiasi halaqah kajian kecil dan mentoring mandiri di ruang kuliah dan mushola sederhana di kawasan kampus perintis.
2. **Fase Transformasi PTN & Kelembagaan Resmi UKM (Tahun 2010–2018)**  
   Seiring penegerian status UBB menjadi Perguruan Tinggi Negeri (PTN) melalui Peraturan Presiden No. 65 Tahun 2010, wadah dakwah mahasiswa ini bertransformasi menjadi Unit Kegiatan Mahasiswa (UKM) resmi universitas dengan nama **LDK Al-Madaniah UBB**. Organisasi ini memperkuat tata kelola kepengurusan, membentuk divisi-divisi strategis, merintis kemitraan dengan LDK tingkat fakultas, serta bergabung secara formal dalam Forum Silaturahmi Lembaga Dakwah Kampus (FSLDK) Wilayah Bangka Belitung.
3. **Fase Kejayaan Madani & Sentralisasi Masjid Kampus (Tahun 2019–Sekarang)**  
   Tonggak bersejarah ditandai dengan pembangunan dan pemakmuran **Masjid Kampus Al-Madaniah UBB** di Kampus Terpadu Balunijuk. LDK Al-Madaniah kini menjadi lokomotif peradaban kampus dengan menaungi 11 biro/bidang pusat, bersinergi aktif bersama 6 LDK Fakultas (Teknik, FPPB, FEB, Hukum, FISIP, dan Kedokteran), serta meluncurkan digitalisasi dakwah kampus melalui platform web terpadu.

---

### 3.3 Visi Organisasi
> **"Terwujudnya Lembaga Dakwah Kampus yang profesional, kokoh dalam ukhuwah, unggul dalam pembinaan spiritualitas dan intelektualitas, guna melahirkan Muslim Muda Arsitek Peradaban menuju kampus Universitas Bangka Belitung yang madani dan bermartabat."**

---

### 3.4 Trilogi Nilai Karakter Madani (Core Values)

```
       ┌────────────────────────────────────────────────────────┐
       │             TRILOGI KARAKTER MADANI UBB                │
       └───────────────────────────┬────────────────────────────┘
            ┌──────────────────────┼──────────────────────┐
            ▼                      ▼                      ▼
    ┌───────────────┐      ┌───────────────┐      ┌───────────────┐
    │ SPIRITUALITAS │      │INTELEKTUALITAS│      │  SOLIDARITAS  │
    │   Kekokohan   │      │   Kecerdasan  │      │  Persaudaraan │
    │    Akidah     │      │   Akademik    │      │  Amal Jama'i  │
    └───────────────┘      └───────────────┘      └───────────────┘
```

1. **Spiritualitas (Ruhiyah & Integritas Moral)**  
   Kekokohan akidah tauhid, keterikatan hati dengan masjid dan Al-Qur'an, kedisiplinan ibadah *yaumiyah*, serta penjagaan akhlak mulia dalam tutur kata dan perilaku.
2. **Intelektualitas (Fikriyah & Keunggulan Akademis)**  
   Mahasiswa muslim yang kritis, haus ilmu pengetahuan, berprestasi di bangku perkuliahan, memahami fikih keislaman secara moderat (*wasathiyah*), serta tanggap terhadap tantangan zaman.
3. **Solidaritas (Ukhuwah & Kepedulian Sosial)**  
   Persaudaraan tulus tanpa sekat latar belakang, etos gotong royong (*amal jama'i*), kepedulian nyata terhadap kaum dhuafa, serta sinergi kebaikan bersama ormawa KM UBB dan masyarakat luas.

---

### 3.5 Lima Pilar Misi LDK Al-Madaniah UBB
1. **Kaderisasi & Tarbiyah Berkelanjutan (Pilar Pembinaan)**  
   Menyelenggarakan sistem pembinaan kepribadian Islam, bimbingan mentoring pekanan, dan upgrading manajemen kepemimpinan dakwah yang sistematis bagi seluruh kader.
2. **Syiar Dakwah & Pemakmuran Kemasjidan (Pilar Syiar)**  
   Menjadikan Masjid Kampus Al-Madaniah UBB sebagai pusat kebangkitan spiritual melalui kajian tematik, bimbingan tahsin gratis, peringatan hari besar Islam, dan semarak festival Ramadhan (CIRAMA).
3. **Ukhuwah & Kolaborasi Multisektoral (Pilar Sinergi)**  
   Membangun harmoni persaudaraan dan kemitraan strategis dengan seluruh Ormawa di lingkungan Keluarga Mahasiswa (KM) UBB, pimpinan birokrasi universitas, serta jejaring FSLDK se-Nusantara.
4. **Pemberdayaan Kemuslimahan — Annisa Center (Pilar Khusus Akhwat)**  
   Mengoptimalkan potensi, wawasan fiqih kewanitaan, kemandirian wirausaha kreatif, dan peran strategis mahasiswi muslimah dalam membangun generasi madani yang tangguh.
5. **Khidmatul Ummah & Kemandirian Finansial (Pilar Pengabdian & Ekonomi)**  
   Menghadirkan program filantropi Islam (infaq, sedekah, santunan dhuafa) serta mengembangkan unit usaha mandiri demi terciptanya dakwah kampus yang berkelanjutan.

---

## 4. ARSITEKTUR INFORMASI (IA) & STRUKTUR NAVIGASI SITUS

### 4.1 Hierarki Navigasi Utama (Header Menu Desktop & Mobile)

```
PORTAL LDK AL-MADANIAH UBB (https://ldk.ubb.ac.id)
│
├── 1. Beranda (Home) [/]
│   ├── Jumbotron Hero Carousel (3 Slides)
│   ├── Floating Widget Jadwal Sholat Balunijuk (WIB)
│   ├── Tab Interaktif "Tentang Kami" (Perkenalan, Sejarah, Visi, Misi, Keluarga)
│   ├── Statistik Capaian (Jumlah Kader, Masjid, Alumni, Program Berjalan)
│   ├── Showcase Warta Berita & Artikel Terkini
│   ├── Agenda & Kalender Kegiatan Terdekat
│   ├── Galeri Dokumentasi Kegiatan
│   ├── Testimoni Tokoh & Demisioner
│   └── Formulir Kontak Langsung & Lokasi Maps
│
├── 2. Profil / Tentang Kami [/about]
│   ├── Profil Lengkap & Sejarah Kampus Peradaban [/about]
│   ├── Struktur Pengurus & Kabinet [/about/structure]
│   │   ├── Badan Pengurus Harian (BPH)
│   │   ├── Biro & Bidang Pusat (11 Departemen)
│   │   └── Direktori LDK Tingkat Fakultas (6 Fakultas)
│   ├── Galeri Dokumentasi Foto & Video [/about/gallery]
│   └── Hubungi Kami & Buku Tamu [/about/contact]
│
├── 3. Divisi & Departemen [/divisi]
│   ├── Filter Tab: Semua (17) | Pengurus Pusat (11) | LDK Fakultas (6)
│   ├── Kartu Deskripsi Tugas & Program Tiap Bidang
│   └── Profil Koordinator & Narahubung Divisi
│
├── 4. Kegiatan & Agenda [/events]
│   ├── Daftar Kegiatan Mendatang (Upcoming Events)
│   ├── Arsip Kegiatan Terlaksana (Past Events)
│   ├── Detail Kegiatan & Formulir Pendaftaran Terintegrasi
│   └── Jadwal & Kalender Dakwah Bulanan [/schedule]
│
├── 5. Berita & Artikel Literasi [/media]
│   ├── Warta Berita Kampus & Liputan Dakwah [/news]
│   ├── Artikel Opini, Fiqih, & Hikmah Keislaman [/articles]
│   └── Kolom Interaktif Komentar, Reaksi, & Pencarian GIF
│
├── 6. Layanan & Khidmat Ummah [/service]
│   ├── Celengan Madaniah (Infaq & Donasi Dakwah QRIS) [/celengan-syahid]
│   ├── Kalkulator Zakat Mal & Penghasilan (Live Harga Emas) [/kalkulator-zakat]
│   ├── Perpustakaan Digital (Katalog Buku & PDF Reader) [/perpustakaan]
│   ├── Call Kestari & Peminjaman Inventaris [/callkestari]
│   ├── Kalkulator Program Kerja Kestari [/kalkulatorkestari]
│   ├── Generator Surat & Izin Resmi LDK [/letters]
│   └── Permohonan Pemendekan Tautan (Shortlink Request) [/shortlink]
│
├── 7. Area Interaksi Kader & Akun Anggota
│   ├── Masuk / Login Akun Kader [/login]
│   ├── Pendaftaran Kader Baru [/register]
│   ├── Profil Anggota & Kartu Tanda Anggota (KTA Digital) [/profile]
│   └── Panel Pengurus (CMS Admin) [/admin]
│
└── 8. Footer Komprehensif
    ├── Identitas Ganda (Logo UBB + Logo LDK Al-Madaniah)
    ├── Alamat Resmi Kampus Balunijuk & Tautan Google Maps
    ├── Quick Links & Direktori Layanan
    ├── Langganan Buletin Dakwah (Newsletter via Email)
    └── Tautan Akun Media Sosial Resmi
```

---

### 4.2 Skema Desain Komponen UI Header & Footer
* **Top Bar / Floating Navbar**:
  * Logo: `ldk-logo.png` dengan rasio `contain`, disertai teks institusional `"LDK Al-Madaniah | Universitas Bangka Belitung"`.
  * Tombol Pengingat Waktu Sholat: Mengambil data waktu sholat shubuh s.d. isya zona Kabupaten Bangka (WIB).
  * Toggle Tema Gelap / Terang (Dark Mode Switch).
  * Navigasi dropdown yang ramah sentuhan (*touch-friendly*) di smartphone dan rapi di desktop.
* **Footer**:
  * Gelombang SVG pemisah (*wave divider*) selebar penuh tanpa celah.
  * Tautan verifikasi legalitas kampus dan direktori cepat.
  * Form pendaftaran newsletter terhubung dengan modal konfirmasi instan.

---

## 5. REKOMENDASI KATALOG DIVISI, BIRO, & LDK FAKULTAS

Struktur kepengurusan terbagi atas **11 Pengurus Pusat** dan **6 LDK Fakultas**:

### 5.1 Pengurus Pusat (11 Satuan Kerja)

| Kode | Nama Bidang / Biro | Ikon Font Awesome | Peran & Deskripsi Tugas Pokok |
|:---:|:---|:---:|:---|
| **BPH** | Badan Pengurus Harian | `fa-crown` | Pimpinan tertinggi organisasi (Ketum, Sekum, Bendum); penentu kebijakan makro, representasi lembaga ke rektorat UBB dan FSLDK. |
| **KST** | Biro Kesekretariatan & Administrasi | `fa-file-signature` | Manajemen tata persuratan, pengarsipan, SOP keorganisasian, inventaris sekretariat, dan legalisir dokumen. |
| **KEU** | Biro Keuangan | `fa-coins` | Pengelolaan kas organisasi, penyusunan RAB tahunan, transparansi pembukuan kas dakwah, dan audit finansial. |
| **KDR** | Bidang Kaderisasi | `fa-user-graduate` | Rekrutmen kader baru (Open Recruitment), pembinaan mentoring pekanan, upgrading kapasitas mental-spiritual, dan LKMD. |
| **SYR** | Bidang Syi'ar Dakwah | `fa-bullhorn` | Pengelolaan syiar Islam kampus, Peringatan Hari Besar Islam (PHBI), penyelenggaraan kajian akbar kampus, dan Semarak Ramadhan (CIRAMA). |
| **TAH** | Bidang Tahsin & Dakwah Masjid Al-Madaniah | `fa-quran` | Penyelenggaraan kelas bimbingan tahsin Al-Qur'an gratis bagi sivitas UBB, halaqah tahfidz, dan pemakmuran operasional ibadah Masjid Al-Madaniah. |
| **ANN** | Bidang Annisa (Kemuslimahan) | `fa-female` | Pengelolaan pembinaan kader akhwat, edukasi fiqih kemuslimahan kontemporer, workshop keputrian, dan media `@annisa_almadaniah`. |
| **MED** | Bidang Syiar Media & Informasi | `fa-photo-video` | Pengelolaan publikasi multimedia, konten Instagram `@ldkalmadaniah.ubb`, desain grafis syiar, liputan video, dan portal website. |
| **HUM** | Bidang Hubungan Masyarakat & Jaringan | `fa-comments` | Diplomasi eksternal, kemitraan Ormawa KM UBB, jejaring alumni/demisioner, komunikasi dengan FSLDK Babel, dan relasi media. |
| **PE** | Bidang Pengembangan Ekonomi & Kewirausahaan | `fa-chart-line` | Dana usaha mandiri organisasi (Danus), merchandise islami, penyediaan atribut kader, dan literasi kewirausahaan pemuda. |
| **PABK** | Bidang Pengembangan Akademik, Bakat & Keilmuan | `fa-brain` | Pelaksanaan program Asistensi Agama Islam (AAI), pelatihan minat bakat mahasiswa, bimbingan prestasi, dan persiapan kafilah MTQ UBB. |

---

### 5.2 LDK Tingkat Fakultas di Lingkungan UBB (6 Fakultas)

| Kode | Satuan LDK Fakultas | Naungan Fakultas di UBB | Ikon | Fokus Gerak & Basis Kader |
|:---:|:---|:---|:---:|:---|
| **LDKS.FT** | LDK Fakultas Teknik | Fakultas Teknik / FST UBB | `fa-cogs` | Basis mahasiswa teknik sipil, elektro, mesin, kimia, dan pertambangan; sinergi pemeliharaan fisik masjid kampus. |
| **LDKS.FPPB** | LDK Fakultas Pertanian, Perikanan & Biologi | FPPB UBB | `fa-seedling` | Gerakan dakwah mahasiswa agroteknologi, akuakultur, dan biologi dengan fokus tadabbur alam dan kepedulian lingkungan hidup. |
| **LDKS.FE** | LDK Fakultas Ekonomi | Fakultas Ekonomi & Bisnis (FEB) | `fa-chart-pie` | Dakwah di kalangan mahasiswa akuntansi, manajemen, dan ekonomi; pengembangan literasi ekonomi syariah dan kewirausahaan. |
| **LDKS.FH** | LDK Fakultas Hukum | Fakultas Hukum UBB | `fa-balance-scale` | Penguatan wawasan hukum Islam dan advokasi keadilan mahasiswa di lingkungan fakultas hukum. |
| **LDKS.FISIP** | LDK Fakultas Ilmu Sosial & Ilmu Politik | FISIP UBB | `fa-users` | Kajian sosiologi dakwah, komunikasi massa Islami, dan analisis kebijakan kampus di kalangan mahasiswa ilmu politik & sosiologi. |
| **LDKS.FKIK** | LDK Fakultas Kedokteran & Ilmu Kesehatan | FKIK UBB | `fa-heartbeat` | Pelayanan kesehatan masyarakat, aksi donor darah, kajian fiqih medis/thibbun nabawi, dan etika profesi kesehatan Islami. |

---

## 6. PROGRAM & KEGIATAN UNGGULAN (FLAGSHIP PROGRAMS)

1. **CIRAMA (Cita Rasa Ramadhan di Kampus UBB)**  
   * **Waktu**: Setiap Bulan Suci Ramadhan (Pusat: Masjid Al-Madaniah UBB).  
   * **Deskripsi**: Rangkaian festival Ramadhan terpadu yang memadukan Tarhib Ramadhan, Kajian Menjelang Berbuka, Buka Puasa Bersama pimpinan rektorat & seluruh pimpinan Ormawa KM UBB, Pesantren Kilat Mahasiswa, dan Iktikaf 10 malam terakhir.
2. **Islamic Fair & Lomba Da'i Regional Bangka Belitung**  
   * **Waktu**: Semester Genap (Agenda Tahunan).  
   * **Deskripsi**: Ajang kompetisi syiar bergengsi bagi pelajar SMA/SMK/MA sederajat dan mahasiswa se-Provinsi Bangka Belitung, mencakup Lomba Da'i Muda, Tilawatil Qur'an, Kaligrafi Kontemporer, dan Cipta Opini Islami.
3. **Kelas Tahsin Al-Qur'an Gratis Bersanad**  
   * **Waktu**: Mingguan (Setiap Selasa & Kamis sore di Masjid Al-Madaniah).  
   * **Deskripsi**: Bimbingan perbaikan bacaan makharijul huruf dan kaidah tajwid terbuka untuk seluruh mahasiswa UBB tanpa dipungut biaya, dipandu asatidz dan kader tahfidz.
4. **Asistensi Agama Islam (AAI) & Mentoring Pekanan**  
   * **Waktu**: Semester Ganjil & Genap.  
   * **Deskripsi**: Kolaborasi LDK Al-Madaniah bersama dosen Pendidikan Agama Islam (PAI) UBB untuk membina mahasiswa baru dalam kelompok kecil (*halaqah*) seputar pemahaman dasar Islam, adab mahasiswa, dan pencegahan paham radikal/menyimpang.
5. **Annisa Day & Seminar Wirausaha Muslimah**  
   * **Waktu**: Triwulanan (Gedung Seminar Babel UBB / Daring).  
   * **Deskripsi**: Agenda khusus mahasiswi persembahan Annisa Center yang mengangkat topik fiqih wanita, kesehatan reproduksi, hijab & kepribadian, serta pelatihan mandiri bisnis kreatif muslimah.
6. **Rihlah Akbar & Tadabbur Alam Bukit Maras**  
   * **Waktu**: Tahunan / Pasca Musyawarah Anggota.  
   * **Deskripsi**: Agenda pengakraban (*ta'aluf*) dan tadabbur keindahan alam Bangka Belitung melalui pendakian Bukit Maras, outbond kepemimpinan, malam keakraban (*mabit*), dan qiyamul lail berjamaah.
7. **Safari Dakwah Kampus bersama Da'i Nasional**  
   * **Waktu**: Semesteran / Menyesuaikan Momentum Kampus.  
   * **Deskripsi**: Kuliah umum dan tabligh akbar menghadirkan ulama/da'i nasional (didukung rektorat UBB dan BKPRMI Bangka) guna menyegarkan gairah spiritual sivitas akademika.
8. **Celengan Madaniah (Gerakan Donasi & Sedekah Subuh)**  
   * **Waktu**: Berkelanjutan (24/7 melalui website).  
   * **Deskripsi**: Penggalangan dana sosial digital melalui QRIS BisaTopup/Bisabiller dan transfer bank untuk bantuan SPP mahasiswa kurang mampu, logistik ifthar puasa sunnah, dan perawatan sarana ibadah Masjid Al-Madaniah.

---

## 7. FREQUENTLY ASKED QUESTIONS (FAQ) RESMI

Berikut adalah daftar pertanyaan yang paling sering diajukan sivitas akademika, disusun dengan jawaban lugas dan ramah:

### Kategori 1: Keanggotaan & Kaderisasi
**Q1: Siapa saja yang boleh bergabung menjadi pengurus atau kader LDK Al-Madaniah UBB?**  
> *Jawaban:* Seluruh mahasiswa muslim aktif Universitas Bangka Belitung (UBB) dari seluruh fakultas, program studi, dan angkatan berhak dan sangat diterima untuk bergabung. LDK Al-Madaniah terbuka bagi siapa saja yang berkeinginan belajar agama, memperbaiki diri, dan berkontribusi bagi kebaikan bersama.

**Q2: Kapan Open Recruitment (Oprec) kader LDK Al-Madaniah dibuka dan bagaimana alurnya?**  
> *Jawaban:* Oprec akbar dibuka setiap awal semester ganjil (bersamaan masa penyambutan mahasiswa baru) dan gelombang kedua pada awal semester genap. Alur pendaftaran sangat mudah: cukup mengisi formulir daring di website resmi (`/register` atau `/events`), mengikuti sesi perkenalan (*Ta'aruf Kader*), dan mengikuti Mentoring Awal.

**Q3: Apakah mahasiswa yang merasa ilmu agamanya masih minim boleh ikut LDK?**  
> *Jawaban:* Tentu saja! LDK Al-Madaniah bukanlah perkumpulan orang-orang yang sudah sempurna ilmu agamanya, melainkan wadah belajar bersama (*madrasah ukhuwah*). Kita belajar dari dasar bersama-sama dalam suasana persaudaraan yang hangat tanpa saling menghakimi.

---

### Kategori 2: Kegiatan, Kajian, & Masjid Kampus
**Q4: Apakah kajian rutin dan agenda LDK Al-Madaniah hanya untuk pengurus saja?**  
> *Jawaban:* Tidak. Lebih dari 90% kegiatan LDK Al-Madaniah bersifat terbuka untuk **seluruh sivitas akademika UBB** (mahasiswa, dosen, tenaga kependidikan) serta masyarakat sekitar kampus. Siapa pun dipersilakan hadir tanpa perlu registrasi rumit.

**Q5: Bagaimana cara mengikuti kelas bimbingan Tahsin Al-Qur'an gratis?**  
> *Jawaban:* Anda dapat mendaftarkan diri secara daring melalui menu Layanan di web atau langsung hadir di Masjid Kampus Al-Madaniah UBB pada jadwal yang tertera di menu `Jadwal & Agenda`. Tim pengajar akan mengelompokkan kelas sesuai tingkat kemampuan bacaan Anda.

**Q6: Apakah ormawa lain di UBB boleh meminjam alat atau berkolaborasi kegiatan?**  
> *Jawaban:* Sangat boleh. LDK Al-Madaniah menjunjung tinggi kolaborasi positif (*ta'awun*). Untuk peminjaman sarana/alat atau pengajuan kolaborasi acara, silakan kunjungi menu `Layanan -> Call Kestari` atau kirimkan surat permohonan ke email resmi kami `ldkalmadaniah@ubb.ac.id`.

---

### Kategori 3: Kemuslimahan (Annisa Center)
**Q7: Apa itu Annisa Center LDK Al-Madaniah UBB?**  
> *Jawaban:* Annisa Center adalah wadah khusus mahasiswi (akhwat) di bawah naungan Bidang Kemuslimahan LDK Al-Madaniah UBB. Bidang ini berfokus pada pembinaan fikih wanita, ruang curhat muslimah yang aman (*safe space*), kajian pranikah Islami, pengembangan keputrian, dan wirausaha muslimah. Anda dapat mengikuti update khususnya di Instagram `@annisa_almadaniah`.

---

### Kategori 4: Celengan Madaniah & Donasi Dakwah
**Q8: Apa itu program Celengan Madaniah di website ini?**  
> *Jawaban:* Celengan Madaniah adalah platform penggalangan dana sosial dakwah dan kemanusiaan resmi LDK Al-Madaniah UBB. Dana yang terkumpul disalurkan secara amanah untuk: santunan mahasiswa prasejahtera, subsidi operasional Masjid Kampus Al-Madaniah, paket buka puasa Ramadhan, pengadaan Al-Qur'an, dan tanggap bencana.

**Q9: Metode pembayaran apa saja yang didukung untuk donasi?**  
> *Jawaban:* Sistem kami mendukung QRIS otomatis (dapat di-scan menggunakan seluruh aplikasi e-wallet seperti GoPay, OVO, Dana, ShopeePay, LinkAja, serta Mobile Banking apapun seperti Livin', BCA Mobile, BSI Mobile, dll.) serta transfer langsung rekening bank resmi LDK.

**Q10: Bagaimana saya mendapatkan bukti donasi resmi?**  
> *Jawaban:* Setelah transaksi terverifikasi oleh sistem secara real-time, invoice dan tautan unduh bukti donasi (*E-Receipt PDF*) otomatis dikirimkan ke alamat email dan nomor WhatsApp yang Anda daftarkan saat mengisi formulir donasi.

---

## 8. INFORMASI KONTAK RESMI & IDENTITAS KAMPUS

Seluruh kanal komunikasi resmi LDK Al-Madaniah UBB diverifikasi sebagai berikut:

* **Alamat Sekretariat Utama**:  
  Masjid Kampus Al-Madaniah / Gedung Bersama Organisasi Mahasiswa,  
  Kampus Terpadu Universitas Bangka Belitung,  
  Jalan Kampus UBB, Desa Balunijuk, Kecamatan Merawang,  
  Kabupaten Bangka, Kepulauan Bangka Belitung 33172.
* **Koordinat Peta Geografis (Google Maps)**:  
  Latitude: `-2.073611` | Longitude: `106.113889`  
  *Peta Digital*: [Universitas Bangka Belitung di Google Maps](https://maps.google.com/?q=Universitas+Bangka+Belitung)
* **Alamat Email Resmi Organisasi**:  
  `ldkalmadaniah@ubb.ac.id`
* **Media Sosial Resmi**:  
  * Instagram Utama: [@ldkalmadaniah.ubb](https://www.instagram.com/ldkalmadaniah.ubb/)  
  * Instagram Kemuslimahan: [@annisa_almadaniah](https://www.instagram.com/annisa_almadaniah/)  
  * Akun YouTube: LDK Al-Madaniah UBB Official  
  * Tagar Resmi Kampanye: `#LDKAlMadaniah` `#KitaAdalahSaudara` `#MuslimMudaArsitekPeradaban` `#UBB`
* **Narahubung Resmi (Hotline WhatsApp)**:  
  * Narahubung 1 (Humas & Kemitraan Eksternal): `+62 857-7692-3137`  
  * Narahubung 2 (Biro Kesekretariatan / Kestari): `+62 858-1935-3387`  
  * Narahubung Khusus Annisa Center (Akhwat): Kontak tertera pada bio `@annisa_almadaniah`

---

## 9. REKOMENDASI IMPLEMENTASI TEKNIS LARAVEL BLADE

Berdasarkan audit arsitektur repositori Laravel `ldksyahid-app`, berikut langkah-langkah implementasi terpadu untuk mengeksekusi migrasi identitas secara bersih dan stabil:

### 9.1 Sanitasi String & Pembersihan Jejak Lama (Audit & Replace)

| No. | Elemen / Lokasi Berkas | Nilai Lama (UIN Jakarta / Syahid) | Nilai Rekomendasi (UBB / Al-Madaniah) |
|:---:|:---|:---|:---|
| 1 | `config/app.php` | `'name' => 'LDK Syahid'` | `'name' => 'LDK Al-Madaniah UBB'` |
| 2 | `resources/views/landing-page/template/nav-bar.blade.php` | Brand text `LDK Syahid UIN Jakarta` | `LDK Al-Madaniah` & `Universitas Bangka Belitung` |
| 3 | `resources/views/landing-page/template/footer.blade.php` | Alamat Ciputat, Tangerang Selatan | Kampus Terpadu Balunijuk, Merawang, Bangka 33172 |
| 4 | `resources/views/landing-page/about/contact-us/index.blade.php` | Handle medsos `@ldksyahid` | `@ldkalmadaniah.ubb` & `@annisa_almadaniah` |
| 5 | `app/Services/LetterPdfService.php` | Signatory block `Jakarta, [Tanggal]` | `Bangka, [Tanggal]` |
| 6 | Database Seeder `structures` & `jumbotrons` | Data UIN / Syahid periode lampau | Seeder terpusat `LdkAlMadaniahSeeder.php` |

### 9.2 Penyesuaian Fitur Waktu Sholat (Widget Navbar)
Widget pengingat sholat di navbar (`prayerNavBtn`) wajib disesuaikan parameternya dengan koordinat lokal Balunijuk, Kabupaten Bangka (WIB / UTC+7, lintang `-2.0736`, bujur `106.1139`, metode Kemenag RI / standard calculation), agar jadwal adzan yang tampil di header website akurat dengan waktu setempat di kampus UBB.

### 9.3 Penataan Aset Grafis & Media
* Pastikan file logo resmi `public/landing-page-ext-rsrc/img/ldk-logo.png` dan logo UBB `public/landing-page-ext-rsrc/img/logo-ubb.png` dimuat dengan styling `object-fit: contain` dan rasio proporsional pada tema gelap maupun terang.
* Gunakan icon set resmi Font Awesome 5.10 (seperti `<i class="fas fa-mosque"></i>`, `<i class="fas fa-quran"></i>`, `<i class="fas fa-handshake"></i>`) guna menggantikan emoji mentah atau aset stiker yang pecah.
* Pastikan background gelombang footer (`footer-wave`) menggunakan atribut `preserveAspectRatio="none"` dengan lebar kontainer 100vw untuk mencegah visual terpotong.

### 9.4 Database Seeder yang Dapat Direproduksi
Jalankan seeder utama yang telah dipersiapkan:
```bash
php artisan db:seed --class=LdkAlMadaniahSeeder
```
Seeder ini secara otomatis mengisi:
* 1 Data Struktur Organisasi Periode 2025/2026 Kabinet Muslim Muda Arsitek Peradaban.
* 3 Konten Banner Jumbotron Beranda yang adaptif dan estetik.
* Warta Berita & Liputan CIRAMA, Rihlah Bukit Maras, dan Seminar Annisa Center.
* Agenda Kegiatan Terjadwal (CIRAMA 2026, Kelas Tahsin Gratis).
* Galeri Dokumentasi Kegiatan Kampus & Safari Dakwah.
* Kutipan Testimoni Demisioner Koordinator Syiar Media dan Annisa Center.

---

## 10. KESIMPULAN & CHECKLIST SERAH TERIMA

Dengan selesainya perumusan ini, tim pengembang memiliki panduan teks, struktur hirarki menu, dan arahan teknis yang lengkap untuk menjadikan website LDK Al-Madaniah UBB sebagai portal dakwah kampus modern, kredibel, dan representatif bagi civitas akademika Universitas Bangka Belitung.

### Checklist Kesiapan:
- [x] Rumusan Headline, Hero Banner, Sub-headline, dan CTA 3 variasi tema.
- [x] Grand Tagline (*Muslim Muda Arsitek Peradaban*) & Slogan Ukhuwah (*#KitaAdalahSaudara*).
- [x] Narasi Profil "Tentang Kami" (Perkenalan, Sejarah 3 Babak, Visi, 3 Pilar Nilai, 5 Misi).
- [x] Arsitektur Informasi & Peta Navigasi 8 kluster utama (Header, Page, Service, Footer).
- [x] Katalog 11 Bidang Pengurus Pusat dan 6 LDK Fakultas UBB.
- [x] 8 Rincian Program Unggulan (CIRAMA, Tahsin, AAI, Islamic Fair, dsb.).
- [x] 10 Daftar Tanya Jawab (FAQ) lengkap berserta jawaban komprehensif.
- [x] Informasi Kontak Resmi (Alamat Kampus Balunijuk, Email, Medsos, Narahubung).
- [x] Panduan teknis implementasi template Laravel Blade & sanitasi basis data.
