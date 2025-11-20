<!doctype html>
<html lang="id">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Budaya Indonesia</title>
  <script src="/_sdk/element_sdk.js"></script>
  <style>
        body {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #FFF9F5 0%, #FFE0B2 50%, #FFCCBC 100%);
            min-height: 100%;
            position: relative;
            overflow-x: hidden;
        }

        * {
            box-sizing: border-box;
        }

        /* Dekorasi mengambang */
        .floating-decoration {
            position: fixed;
            font-size: 3rem;
            opacity: 0.15;
            pointer-events: none;
            z-index: 1;
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-30px) rotate(10deg); }
        }

        .decoration-1 { top: 10%; left: 5%; animation-delay: 0s; }
        .decoration-2 { top: 20%; right: 8%; animation-delay: 1s; }
        .decoration-3 { top: 40%; left: 3%; animation-delay: 2s; }
        .decoration-4 { top: 60%; right: 5%; animation-delay: 3s; }
        .decoration-5 { top: 80%; left: 10%; animation-delay: 1.5s; }
        .decoration-6 { top: 70%; right: 12%; animation-delay: 2.5s; }

        /* Bintang berkilau */
        .sparkle {
            position: absolute;
            font-size: 1.5rem;
            animation: sparkle 2s ease-in-out infinite;
        }

        @keyframes sparkle {
            0%, 100% { opacity: 0.3; transform: scale(1); }
            50% { opacity: 1; transform: scale(1.3); }
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        header {
            background: linear-gradient(135deg, #FFEBEE 0%, #FCE4EC 100%);
            color: #E57373;
            padding: 40px 20px;
            text-align: center;
            box-shadow: 0 8px 24px rgba(0,0,0,0.08);
            margin-bottom: 40px;
            border-radius: 0 0 40px 40px;
            position: relative;
            overflow: hidden;
        }

        header::before {
            content: '🎨';
            position: absolute;
            top: 10px;
            left: 20px;
            font-size: 3rem;
            opacity: 0.3;
            animation: wiggle 3s ease-in-out infinite;
        }

        header::after {
            content: '🎭';
            position: absolute;
            top: 10px;
            right: 20px;
            font-size: 3rem;
            opacity: 0.3;
            animation: wiggle 3s ease-in-out infinite;
            animation-delay: 1.5s;
        }

        @keyframes wiggle {
            0%, 100% { transform: rotate(0deg); }
            25% { transform: rotate(-10deg); }
            75% { transform: rotate(10deg); }
        }

        header h1 {
            margin: 0;
            font-size: 2.8rem;
            text-shadow: 2px 2px 8px rgba(229,115,115,0.2);
            font-weight: 700;
            letter-spacing: 0.5px;
            position: relative;
            z-index: 2;
        }

        header h1::before {
            content: '🌺';
            margin-right: 15px;
            animation: bounce 2s ease-in-out infinite;
        }

        header h1::after {
            content: '🌺';
            margin-left: 15px;
            animation: bounce 2s ease-in-out infinite;
            animation-delay: 1s;
        }

        @keyframes bounce {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }

        nav {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 15px;
            margin-top: 25px;
        }

        .nav-btn {
            background: linear-gradient(135deg, #FFE0B2 0%, #FFCC80 100%);
            color: #6D4C41;
            border: 4px solid #FFB74D;
            padding: 16px 32px;
            border-radius: 30px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 4px 16px rgba(255,183,77,0.3), inset 0 2px 0 rgba(255,255,255,0.3);
            position: relative;
        }

        .nav-btn::before {
            content: '⭐';
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 1.2rem;
            opacity: 0;
            transition: all 0.3s ease;
        }

        .nav-btn:hover::before {
            opacity: 1;
            left: 5px;
        }

        .nav-btn:hover {
            transform: translateY(-4px) scale(1.05) rotate(-1deg);
            box-shadow: 0 8px 24px rgba(255,183,77,0.5), inset 0 2px 0 rgba(255,255,255,0.3);
            background: linear-gradient(135deg, #FFB74D 0%, #FFA726 100%);
            border-color: #FF9800;
        }

        .nav-btn:active {
            transform: translateY(-2px) scale(1.02) rotate(0deg);
        }

        .hero {
            background: linear-gradient(135deg, #FFFFFF 0%, #FFF3E0 100%);
            border-radius: 32px;
            padding: 50px;
            text-align: center;
            box-shadow: 0 12px 40px rgba(0,0,0,0.08);
            margin-bottom: 40px;
            border: 4px dashed #FFE0B2;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '🎊';
            position: absolute;
            top: 10px;
            left: 10px;
            font-size: 3rem;
            opacity: 0.2;
            animation: spin 10s linear infinite;
        }

        .hero::after {
            content: '🎉';
            position: absolute;
            bottom: 10px;
            right: 10px;
            font-size: 3rem;
            opacity: 0.2;
            animation: spin 10s linear infinite reverse;
        }

        @keyframes spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        .hero h2 {
            color: #E57373;
            font-size: 2.3rem;
            margin-bottom: 24px;
            font-weight: 700;
        }

        .hero p {
            color: #6D4C41;
            font-size: 1.25rem;
            line-height: 1.8;
            margin-bottom: 40px;
            max-width: 900px;
            margin-left: auto;
            margin-right: auto;
        }

        .illustration-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        .illustration-card {
            background: linear-gradient(135deg, #FFFFFF 0%, #FFE0B2 100%);
            padding: 35px;
            border-radius: 24px;
            text-align: center;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 6px 20px rgba(255,183,77,0.15);
            border: 4px dashed #FFCC80;
            position: relative;
        }

        .illustration-card::before {
            content: '✨';
            position: absolute;
            top: -10px;
            right: -10px;
            font-size: 2rem;
            animation: sparkle 2s ease-in-out infinite;
        }

        .illustration-card::after {
            content: '🌟';
            position: absolute;
            bottom: -10px;
            left: -10px;
            font-size: 1.8rem;
            animation: sparkle 2s ease-in-out infinite;
            animation-delay: 1s;
        }

        .illustration-card:hover {
            transform: translateY(-8px) scale(1.03) rotate(-2deg);
            box-shadow: 0 12px 32px rgba(255,183,77,0.3);
            border-color: #FFB74D;
            border-style: dotted;
        }

        .illustration-card .emoji {
            font-size: 4.5rem;
            margin-bottom: 15px;
            filter: drop-shadow(0 4px 8px rgba(0,0,0,0.1));
            display: inline-block;
            transition: all 0.3s ease;
        }

        .illustration-card:hover .emoji {
            transform: scale(1.3) rotate(15deg);
            filter: drop-shadow(0 8px 16px rgba(0,0,0,0.2));
        }

        .illustration-card h3 {
            color: #6D4C41;
            font-size: 1.35rem;
            margin: 0;
            font-weight: 600;
        }

        .content-page {
            display: none;
            animation: fadeIn 0.5s ease;
        }

        .content-page.active {
            display: block;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .material-section {
            background: linear-gradient(135deg, #FFFFFF 0%, #FFF9F5 100%);
            border-radius: 32px;
            padding: 50px;
            margin-bottom: 40px;
            box-shadow: 0 12px 40px rgba(0,0,0,0.08);
            border: 3px solid #FFE0B2;
        }

        .material-section h2 {
            color: #E57373;
            font-size: 2.3rem;
            margin-bottom: 24px;
            border-bottom: 4px solid #FFB74D;
            padding-bottom: 16px;
            font-weight: 700;
        }

        .material-section h3 {
            color: #6D4C41;
            font-size: 1.6rem;
            margin-top: 30px;
            margin-bottom: 18px;
            font-weight: 600;
        }

        .material-section p {
            color: #6D4C41;
            font-size: 1.15rem;
            line-height: 1.9;
            margin-bottom: 24px;
        }

        .examples-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin: 25px 0;
        }

        .example-card {
            background: linear-gradient(135deg, #FFFFFF 0%, #FFF3E0 100%);
            padding: 28px;
            border-radius: 20px;
            border-left: 6px solid #E57373;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 4px 16px rgba(0,0,0,0.06);
        }

        .example-card:hover {
            transform: translateX(8px) scale(1.02);
            box-shadow: 0 8px 24px rgba(229,115,115,0.2);
            border-left-width: 8px;
        }

        .example-card h4 {
            color: #E57373;
            font-size: 1.35rem;
            margin: 0 0 12px 0;
            font-weight: 600;
        }

        .example-card p {
            color: #6D4C41;
            font-size: 1.05rem;
            margin: 0;
            line-height: 1.6;
        }

        .quiz-section {
            background: linear-gradient(135deg, #E1F5FE 0%, #B3E5FC 100%);
            border-radius: 28px;
            padding: 40px;
            margin-top: 40px;
            border: 3px solid #81D4FA;
            box-shadow: 0 8px 24px rgba(100,181,246,0.15);
        }

        .quiz-section h3 {
            color: #64B5F6;
            font-size: 2rem;
            margin-bottom: 28px;
            text-align: center;
            font-weight: 700;
        }

        .quiz-question {
            background: white;
            padding: 30px;
            border-radius: 20px;
            margin-bottom: 24px;
            box-shadow: 0 6px 20px rgba(0,0,0,0.08);
            border: 2px solid #B3E5FC;
            transition: all 0.3s ease;
        }

        .quiz-question:hover {
            box-shadow: 0 8px 28px rgba(100,181,246,0.2);
            border-color: #81D4FA;
        }

        .quiz-question h4 {
            color: #64B5F6;
            font-size: 1.25rem;
            margin-bottom: 18px;
            font-weight: 600;
            line-height: 1.5;
        }

        .quiz-options {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .quiz-option {
            background: #FAFAFA;
            border: 2px solid #E0E0E0;
            padding: 14px 24px;
            border-radius: 14px;
            cursor: pointer;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            font-size: 1.05rem;
        }

        .quiz-option:hover {
            background: linear-gradient(135deg, #FFF3E0 0%, #FFE0B2 100%);
            border-color: #FFB74D;
            transform: translateX(8px);
            box-shadow: 0 4px 12px rgba(255,183,77,0.2);
        }

        .quiz-option.selected {
            background: linear-gradient(135deg, #FFE0B2 0%, #FFCC80 100%);
            border-color: #FFB74D;
            font-weight: 600;
            box-shadow: 0 4px 12px rgba(255,183,77,0.3);
        }

        .quiz-option.correct {
            background: linear-gradient(135deg, #81C784 0%, #66BB6A 100%);
            border-color: #4CAF50;
            color: white;
            font-weight: 600;
        }

        .quiz-option.incorrect {
            background: linear-gradient(135deg, #E57373 0%, #EF5350 100%);
            border-color: #F44336;
            color: white;
            font-weight: 600;
        }

        .quiz-result {
            background: white;
            padding: 24px;
            border-radius: 20px;
            margin-top: 24px;
            text-align: center;
            font-size: 1.3rem;
            font-weight: 600;
            display: none;
            border: 3px solid #81C784;
            box-shadow: 0 6px 20px rgba(129,199,132,0.2);
        }

        .quiz-result.show {
            display: block;
            animation: fadeIn 0.5s ease;
        }

        .back-btn {
            background: linear-gradient(135deg, #64B5F6 0%, #42A5F5 100%);
            color: white;
            border: 3px solid #64B5F6;
            padding: 16px 44px;
            border-radius: 30px;
            font-size: 1.15rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 6px 20px rgba(100,181,246,0.3);
            margin-top: 24px;
        }

        .back-btn:hover {
            transform: translateY(-4px) scale(1.02);
            box-shadow: 0 10px 32px rgba(100,181,246,0.5);
            border-color: #42A5F5;
        }

        .check-btn {
            background: linear-gradient(135deg, #81C784 0%, #66BB6A 100%);
            color: white;
            border: 3px solid #81C784;
            padding: 16px 44px;
            border-radius: 30px;
            font-size: 1.15rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 6px 20px rgba(129,199,132,0.3);
            margin-top: 24px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .check-btn:hover {
            transform: translateY(-4px) scale(1.02);
            box-shadow: 0 10px 32px rgba(129,199,132,0.5);
            border-color: #66BB6A;
        }

        footer {
            background: linear-gradient(135deg, #FFEBEE 0%, #FCE4EC 100%);
            color: #E57373;
            text-align: center;
            padding: 32px;
            margin-top: 50px;
            border-radius: 40px 40px 0 0;
            font-size: 1.15rem;
            font-weight: 600;
            box-shadow: 0 -8px 24px rgba(0,0,0,0.08);
            position: relative;
        }

        footer::before {
            content: '💖';
            position: absolute;
            left: 50%;
            top: -20px;
            transform: translateX(-50%);
            font-size: 2.5rem;
            animation: heartbeat 1.5s ease-in-out infinite;
        }

        @keyframes heartbeat {
            0%, 100% { transform: translateX(-50%) scale(1); }
            50% { transform: translateX(-50%) scale(1.2); }
        }

        footer::after {
            content: '🌟 ✨ ⭐ ✨ 🌟';
            position: absolute;
            bottom: 100%;
            left: 50%;
            transform: translateX(-50%);
            font-size: 1.5rem;
            white-space: nowrap;
        }

        @media (max-width: 768px) {
            header h1 {
                font-size: 1.8rem;
            }

            .nav-btn {
                padding: 12px 20px;
                font-size: 1rem;
            }

            .hero {
                padding: 25px;
            }

            .material-section {
                padding: 25px;
            }

            .illustration-grid {
                grid-template-columns: 1fr;
            }

            .examples-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
  <style>@view-transition { navigation: auto; }</style>
  <script src="/_sdk/data_sdk.js" type="text/javascript"></script>
  <script src="https://cdn.tailwindcss.com" type="text/javascript"></script>
 </head>
 <body><!-- Dekorasi mengambang -->
  <div class="floating-decoration decoration-1">
   🎨
  </div>
  <div class="floating-decoration decoration-2">
   🎭
  </div>
  <div class="floating-decoration decoration-3">
   🌸
  </div>
  <div class="floating-decoration decoration-4">
   🎪
  </div>
  <div class="floating-decoration decoration-5">
   🎉
  </div>
  <div class="floating-decoration decoration-6">
   🏮
  </div>
  <header>
   <h1 id="main-title">Mengenal Budaya Indonesia</h1>
   <nav id="main-nav"><button class="nav-btn" onclick="showPage('tarian')">🩰 Tarian Tradisional</button> <button class="nav-btn" onclick="showPage('pakaian')">👘 Pakaian Adat</button> <button class="nav-btn" onclick="showPage('rumah')">🏠 Rumah Adat</button> <button class="nav-btn" onclick="showPage('makanan')">🍜 Makanan Khas</button>
   </nav>
  </header>
  <div class="container"><!-- Halaman Utama -->
   <div id="home-page" class="content-page active">
    <div class="hero">
     <h2>Selamat Datang di Portal Budaya Indonesia!</h2>
     <p>Indonesia memiliki kekayaan budaya yang luar biasa. Dari Sabang sampai Merauke, setiap daerah memiliki keunikan tersendiri. Mari kita pelajari bersama tentang tarian, pakaian, rumah adat, dan makanan khas dari berbagai daerah di Indonesia!</p>
     <div class="illustration-grid">
      <div class="illustration-card">
       <div class="emoji">
        🩰
       </div>
       <h3>Tarian Tradisional</h3>
      </div>
      <div class="illustration-card">
       <div class="emoji">
        👘
       </div>
       <h3>Pakaian Adat</h3>
      </div>
      <div class="illustration-card">
       <div class="emoji">
        🏠
       </div>
       <h3>Rumah Adat</h3>
      </div>
      <div class="illustration-card">
       <div class="emoji">
        🍜
       </div>
       <h3>Makanan Khas</h3>
      </div>
     </div>
    </div>
   </div><!-- Halaman Tarian Tradisional -->
   <div id="tarian-page" class="content-page">
    <div class="material-section">
     <h2>🩰 Tarian Tradisional Indonesia</h2>
     <p>Tarian tradisional Indonesia merupakan warisan budaya yang mencerminkan kehidupan masyarakat setempat. Setiap tarian memiliki makna, gerakan, dan kostum yang khas dari daerah asalnya.</p>
     <h3>Jenis-jenis Tarian Tradisional</h3>
     <p>Tarian tradisional Indonesia dapat dibedakan berdasarkan fungsinya: tarian upacara adat, tarian pergaulan, tarian hiburan, dan tarian pertunjukan.</p>
     <div class="examples-grid">
      <div class="example-card">
       <h4>Tari Saman - Aceh</h4>
       <p>Tarian kolosal yang dimainkan secara berkelompok dengan gerakan kompak dan cepat. Diakui UNESCO sebagai warisan budaya dunia.</p>
      </div>
      <div class="example-card">
       <h4>Tari Pendet - Bali</h4>
       <p>Tarian penyambutan yang berasal dari tarian pemujaan di pura. Ditarikan oleh penari wanita dengan gerakan lemah gemulai.</p>
      </div>
      <div class="example-card">
       <h4>Tari Kecak - Bali</h4>
       <p>Tarian dramatik yang diiringi suara "cak" dari puluhan penari pria yang duduk melingkar.</p>
      </div>
      <div class="example-card">
       <h4>Tari Jaipong - Jawa Barat</h4>
       <p>Tarian yang energik dan dinamis dengan iringan gamelan degung khas Sunda.</p>
      </div>
      <div class="example-card">
       <h4>Tari Piring - Sumatera Barat</h4>
       <p>Tarian yang menggunakan piring sebagai properti utama dengan gerakan memutar piring di telapak tangan.</p>
      </div>
      <div class="example-card">
       <h4>Tari Tor-Tor - Sumatera Utara</h4>
       <p>Tarian sakral masyarakat Batak yang biasanya dibawakan dalam upacara adat.</p>
      </div>
     </div>
     <div class="quiz-section">
      <h3>🎯 Quiz: Tarian Tradisional</h3>
      <div class="quiz-question" data-answer="a">
       <h4>1. Tarian tradisional dari Aceh yang diakui UNESCO adalah...</h4>
       <div class="quiz-options">
        <div class="quiz-option" data-value="a">
         A. Tari Saman
        </div>
        <div class="quiz-option" data-value="b">
         B. Tari Pendet
        </div>
        <div class="quiz-option" data-value="c">
         C. Tari Kecak
        </div>
       </div>
      </div>
      <div class="quiz-question" data-answer="b">
       <h4>2. Tarian yang menggunakan piring sebagai properti berasal dari...</h4>
       <div class="quiz-options">
        <div class="quiz-option" data-value="a">
         A. Jawa Barat
        </div>
        <div class="quiz-option" data-value="b">
         B. Sumatera Barat
        </div>
        <div class="quiz-option" data-value="c">
         C. Bali
        </div>
       </div>
      </div>
      <div class="quiz-question" data-answer="c">
       <h4>3. Tari Kecak diiringi dengan...</h4>
       <div class="quiz-options">
        <div class="quiz-option" data-value="a">
         A. Gamelan
        </div>
        <div class="quiz-option" data-value="b">
         B. Gendang
        </div>
        <div class="quiz-option" data-value="c">
         C. Suara "cak" dari penari
        </div>
       </div>
      </div>
      <div class="quiz-question" data-answer="a">
       <h4>4. Tari Pendet berasal dari daerah...</h4>
       <div class="quiz-options">
        <div class="quiz-option" data-value="a">
         A. Bali
        </div>
        <div class="quiz-option" data-value="b">
         B. Jawa Timur
        </div>
        <div class="quiz-option" data-value="c">
         C. Sulawesi
        </div>
       </div>
      </div>
      <div class="quiz-question" data-answer="b">
       <h4>5. Tari Tor-Tor adalah tarian sakral masyarakat...</h4>
       <div class="quiz-options">
        <div class="quiz-option" data-value="a">
         A. Minangkabau
        </div>
        <div class="quiz-option" data-value="b">
         B. Batak
        </div>
        <div class="quiz-option" data-value="c">
         C. Dayak
        </div>
       </div>
      </div><button class="check-btn" onclick="checkQuiz('tarian')">Periksa Jawaban</button>
      <div class="quiz-result" id="tarian-result"></div>
     </div><button class="back-btn" onclick="showPage('home')">← Kembali ke Beranda</button>
    </div>
   </div><!-- Halaman Pakaian Adat -->
   <div id="pakaian-page" class="content-page">
    <div class="material-section">
     <h2>👘 Pakaian Adat Indonesia</h2>
     <p>Pakaian adat Indonesia sangat beragam dan mencerminkan identitas budaya setiap daerah. Setiap pakaian adat memiliki filosofi, motif, dan cara pemakaian yang unik.</p>
     <h3>Keunikan Pakaian Adat</h3>
     <p>Pakaian adat Indonesia dibuat dengan teknik dan bahan khusus seperti tenun, batik, songket, dan sulaman. Warna dan motifnya memiliki makna simbolis tersendiri.</p>
     <div class="examples-grid">
      <div class="example-card">
       <h4>Kebaya - Jawa</h4>
       <p>Pakaian wanita yang elegan dengan bahan brokat atau sutra, dipadukan dengan kain batik atau rok panjang.</p>
      </div>
      <div class="example-card">
       <h4>Ulos - Sumatera Utara</h4>
       <p>Kain tenun khas Batak yang digunakan dalam upacara adat. Memiliki warna cerah dan motif khas.</p>
      </div>
      <div class="example-card">
       <h4>Baju Bodo - Sulawesi Selatan</h4>
       <p>Pakaian tradisional wanita Bugis-Makassar dengan bentuk persegi dan lengan pendek lebar.</p>
      </div>
      <div class="example-card">
       <h4>Pakaian Adat Bali</h4>
       <p>Terdiri dari kain, sabuk, dan udeng (ikat kepala) untuk pria. Wanita menggunakan kebaya dan kain songket.</p>
      </div>
      <div class="example-card">
       <h4>Baju Kurung - Riau</h4>
       <p>Pakaian longgar khas Melayu dengan warna cerah dan hiasan sulaman emas.</p>
      </div>
      <div class="example-card">
       <h4>Koteka - Papua</h4>
       <p>Pakaian tradisional pria Papua yang terbuat dari kulit labu kering, digunakan sebagai penutup.</p>
      </div>
     </div>
     <div class="quiz-section">
      <h3>🎯 Quiz: Pakaian Adat</h3>
      <div class="quiz-question" data-answer="b">
       <h4>1. Kebaya biasanya dipadukan dengan...</h4>
       <div class="quiz-options">
        <div class="quiz-option" data-value="a">
         A. Celana panjang
        </div>
        <div class="quiz-option" data-value="b">
         B. Kain batik
        </div>
        <div class="quiz-option" data-value="c">
         C. Rok mini
        </div>
       </div>
      </div>
      <div class="quiz-question" data-answer="a">
       <h4>2. Ulos adalah kain tenun khas dari...</h4>
       <div class="quiz-options">
        <div class="quiz-option" data-value="a">
         A. Batak, Sumatera Utara
        </div>
        <div class="quiz-option" data-value="b">
         B. Minangkabau, Sumatera Barat
        </div>
        <div class="quiz-option" data-value="c">
         C. Toraja, Sulawesi Selatan
        </div>
       </div>
      </div>
      <div class="quiz-question" data-answer="c">
       <h4>3. Baju Bodo berasal dari daerah...</h4>
       <div class="quiz-options">
        <div class="quiz-option" data-value="a">
         A. Jawa Tengah
        </div>
        <div class="quiz-option" data-value="b">
         B. Kalimantan
        </div>
        <div class="quiz-option" data-value="c">
         C. Sulawesi Selatan
        </div>
       </div>
      </div>
      <div class="quiz-question" data-answer="a">
       <h4>4. Udeng adalah ikat kepala khas dari...</h4>
       <div class="quiz-options">
        <div class="quiz-option" data-value="a">
         A. Bali
        </div>
        <div class="quiz-option" data-value="b">
         B. Jawa
        </div>
        <div class="quiz-option" data-value="c">
         C. Aceh
        </div>
       </div>
      </div>
      <div class="quiz-question" data-answer="c">
       <h4>5. Koteka adalah pakaian tradisional dari...</h4>
       <div class="quiz-options">
        <div class="quiz-option" data-value="a">
         A. Kalimantan
        </div>
        <div class="quiz-option" data-value="b">
         B. Maluku
        </div>
        <div class="quiz-option" data-value="c">
         C. Papua
        </div>
       </div>
      </div><button class="check-btn" onclick="checkQuiz('pakaian')">Periksa Jawaban</button>
      <div class="quiz-result" id="pakaian-result"></div>
     </div><button class="back-btn" onclick="showPage('home')">← Kembali ke Beranda</button>
    </div>
   </div><!-- Halaman Rumah Adat -->
   <div id="rumah-page" class="content-page">
    <div class="material-section">
     <h2>🏠 Rumah Adat Indonesia</h2>
     <p>Rumah adat Indonesia mencerminkan kearifan lokal dalam beradaptasi dengan lingkungan. Arsitektur rumah adat mempertimbangkan iklim, bahan bangunan lokal, dan filosofi hidup masyarakat.</p>
     <h3>Ciri Khas Rumah Adat</h3>
     <p>Rumah adat umumnya berbentuk panggung untuk menghindari binatang buas dan banjir. Atapnya tinggi untuk sirkulasi udara, dengan ukiran dan ornamen yang sarat makna.</p>
     <div class="examples-grid">
      <div class="example-card">
       <h4>Rumah Gadang - Sumatera Barat</h4>
       <p>Rumah adat Minangkabau dengan atap melengkung seperti tanduk kerbau. Memiliki banyak ruangan dan gonjong yang menjulang.</p>
      </div>
      <div class="example-card">
       <h4>Rumah Joglo - Jawa Tengah</h4>
       <p>Rumah tradisional dengan atap limasan yang ditopang empat tiang utama (soko guru) dan berstruktur kokoh.</p>
      </div>
      <div class="example-card">
       <h4>Rumah Tongkonan - Sulawesi Selatan</h4>
       <p>Rumah adat Toraja dengan atap melengkung seperti perahu. Dihiasi tanduk kerbau sebagai simbol status.</p>
      </div>
      <div class="example-card">
       <h4>Rumah Panggung Melayu - Riau</h4>
       <p>Rumah berbentuk panggung tinggi untuk menghindari banjir, dengan tangga di depan dan ventilasi lebar.</p>
      </div>
      <div class="example-card">
       <h4>Rumah Honai - Papua</h4>
       <p>Rumah berbentuk kerucut dengan dinding kayu dan atap jerami. Dirancang untuk melindungi dari dingin pegunungan.</p>
      </div>
      <div class="example-card">
       <h4>Rumah Limas - Sumatera Selatan</h4>
       <p>Rumah panggung dengan atap berbentuk limas yang bertingkat, mencerminkan stratifikasi sosial.</p>
      </div>
     </div>
     <div class="quiz-section">
      <h3>🎯 Quiz: Rumah Adat</h3>
      <div class="quiz-question" data-answer="b">
       <h4>1. Rumah Gadang memiliki atap yang menyerupai...</h4>
       <div class="quiz-options">
        <div class="quiz-option" data-value="a">
         A. Perahu
        </div>
        <div class="quiz-option" data-value="b">
         B. Tanduk kerbau
        </div>
        <div class="quiz-option" data-value="c">
         C. Kerucut
        </div>
       </div>
      </div>
      <div class="quiz-question" data-answer="c">
       <h4>2. Soko guru adalah empat tiang utama pada rumah...</h4>
       <div class="quiz-options">
        <div class="quiz-option" data-value="a">
         A. Rumah Gadang
        </div>
        <div class="quiz-option" data-value="b">
         B. Rumah Tongkonan
        </div>
        <div class="quiz-option" data-value="c">
         C. Rumah Joglo
        </div>
       </div>
      </div>
      <div class="quiz-question" data-answer="a">
       <h4>3. Rumah Tongkonan berasal dari daerah...</h4>
       <div class="quiz-options">
        <div class="quiz-option" data-value="a">
         A. Toraja, Sulawesi Selatan
        </div>
        <div class="quiz-option" data-value="b">
         B. Batak, Sumatera Utara
        </div>
        <div class="quiz-option" data-value="c">
         C. Dayak, Kalimantan
        </div>
       </div>
      </div>
      <div class="quiz-question" data-answer="c">
       <h4>4. Rumah Honai berbentuk kerucut dan berasal dari...</h4>
       <div class="quiz-options">
        <div class="quiz-option" data-value="a">
         A. Maluku
        </div>
        <div class="quiz-option" data-value="b">
         B. Nusa Tenggara
        </div>
        <div class="quiz-option" data-value="c">
         C. Papua
        </div>
       </div>
      </div>
      <div class="quiz-question" data-answer="b">
       <h4>5. Fungsi utama rumah panggung adalah...</h4>
       <div class="quiz-options">
        <div class="quiz-option" data-value="a">
         A. Terlihat lebih megah
        </div>
        <div class="quiz-option" data-value="b">
         B. Menghindari banjir dan binatang buas
        </div>
        <div class="quiz-option" data-value="c">
         C. Menghemat lahan
        </div>
       </div>
      </div><button class="check-btn" onclick="checkQuiz('rumah')">Periksa Jawaban</button>
      <div class="quiz-result" id="rumah-result"></div>
     </div><button class="back-btn" onclick="showPage('home')">← Kembali ke Beranda</button>
    </div>
   </div><!-- Halaman Makanan Khas -->
   <div id="makanan-page" class="content-page">
    <div class="material-section">
     <h2>🍜 Makanan Khas Indonesia</h2>
     <p>Kuliner Indonesia sangat kaya dengan cita rasa yang beragam. Setiap daerah memiliki makanan khas dengan bumbu dan teknik memasak yang berbeda-beda.</p>
     <h3>Keragaman Kuliner Nusantara</h3>
     <p>Makanan Indonesia terkenal dengan penggunaan rempah-rempah yang melimpah, menciptakan rasa yang khas dan menggugah selera. Dari yang pedas hingga manis, semua ada!</p>
     <div class="examples-grid">
      <div class="example-card">
       <h4>Rendang - Sumatera Barat</h4>
       <p>Masakan daging dengan santan dan rempah-rempah yang dimasak lama hingga bumbu meresap. Dinobatkan sebagai makanan terenak di dunia.</p>
      </div>
      <div class="example-card">
       <h4>Gudeg - Yogyakarta</h4>
       <p>Makanan manis dari nangka muda yang dimasak dengan santan dan gula merah. Disajikan dengan ayam, telur, dan sambal goreng krecek.</p>
      </div>
      <div class="example-card">
       <h4>Pempek - Palembang</h4>
       <p>Makanan berbahan ikan tenggiri dan sagu yang digoreng dan disajikan dengan kuah cuka pedas (cuko).</p>
      </div>
      <div class="example-card">
       <h4>Sate - Jawa Timur</h4>
       <p>Daging yang ditusuk dan dipanggang, disajikan dengan bumbu kacang atau kecap. Ada banyak varian sate di Indonesia.</p>
      </div>
      <div class="example-card">
       <h4>Papeda - Papua</h4>
       <p>Makanan pokok dari sagu yang berbentuk seperti lem dengan tekstur kenyal, disajikan dengan ikan kuah kuning.</p>
      </div>
      <div class="example-card">
       <h4>Soto - Berbagai Daerah</h4>
       <p>Sup tradisional Indonesia dengan berbagai variasi: Soto Betawi, Soto Lamongan, Soto Banjar, dan lainnya.</p>
      </div>
     </div>
     <div class="quiz-section">
      <h3>🎯 Quiz: Makanan Khas</h3>
      <div class="quiz-question" data-answer="a">
       <h4>1. Rendang adalah makanan khas dari...</h4>
       <div class="quiz-options">
        <div class="quiz-option" data-value="a">
         A. Sumatera Barat
        </div>
        <div class="quiz-option" data-value="b">
         B. Jawa Barat
        </div>
        <div class="quiz-option" data-value="c">
         C. Bali
        </div>
       </div>
      </div>
      <div class="quiz-question" data-answer="b">
       <h4>2. Gudeg memiliki rasa yang...</h4>
       <div class="quiz-options">
        <div class="quiz-option" data-value="a">
         A. Pedas
        </div>
        <div class="quiz-option" data-value="b">
         B. Manis
        </div>
        <div class="quiz-option" data-value="c">
         C. Asam
        </div>
       </div>
      </div>
      <div class="quiz-question" data-answer="c">
       <h4>3. Pempek disajikan dengan kuah yang disebut...</h4>
       <div class="quiz-options">
        <div class="quiz-option" data-value="a">
         A. Sambal
        </div>
        <div class="quiz-option" data-value="b">
         B. Bumbu kacang
        </div>
        <div class="quiz-option" data-value="c">
         C. Cuko
        </div>
       </div>
      </div>
      <div class="quiz-question" data-answer="b">
       <h4>4. Papeda adalah makanan pokok dari...</h4>
       <div class="quiz-options">
        <div class="quiz-option" data-value="a">
         A. Maluku
        </div>
        <div class="quiz-option" data-value="b">
         B. Papua
        </div>
        <div class="quiz-option" data-value="c">
         C. Nusa Tenggara
        </div>
       </div>
      </div>
      <div class="quiz-question" data-answer="a">
       <h4>5. Bahan utama pempek adalah...</h4>
       <div class="quiz-options">
        <div class="quiz-option" data-value="a">
         A. Ikan tenggiri dan sagu
        </div>
        <div class="quiz-option" data-value="b">
         B. Ayam dan tepung
        </div>
        <div class="quiz-option" data-value="c">
         C. Daging dan santan
        </div>
       </div>
      </div><button class="check-btn" onclick="checkQuiz('makanan')">Periksa Jawaban</button>
      <div class="quiz-result" id="makanan-result"></div>
     </div><button class="back-btn" onclick="showPage('home')">← Kembali ke Beranda</button>
    </div>
   </div>
  </div>
  <footer id="footer-text">
   Website Edukasi Budaya Indonesia
  </footer>
  <script>
        const defaultConfig = {
            main_title: "Mengenal Budaya Indonesia",
            footer_text: "Website Edukasi Budaya Indonesia",
            primary_color: "#E57373",
            secondary_color: "#FFB74D",
            background_color: "#FFF9F5",
            text_color: "#6D4C41",
            button_color: "#64B5F6",
            font_family: "Segoe UI",
            font_size: 16
        };

        let config = { ...defaultConfig };

        function showPage(page) {
            const pages = document.querySelectorAll('.content-page');
            pages.forEach(p => p.classList.remove('active'));
            
            if (page === 'home') {
                document.getElementById('home-page').classList.add('active');
            } else {
                document.getElementById(page + '-page').classList.add('active');
            }
            
            window.scrollTo(0, 0);
        }

        function checkQuiz(quizType) {
            const questions = document.querySelectorAll(`#${quizType}-page .quiz-question`);
            let correct = 0;
            let total = questions.length;
            const pointsPerQuestion = 20; // Setiap soal bernilai 20 poin

            questions.forEach(question => {
                const correctAnswer = question.dataset.answer;
                const selectedOption = question.querySelector('.quiz-option.selected');
                
                if (selectedOption) {
                    const selectedValue = selectedOption.dataset.value;
                    if (selectedValue === correctAnswer) {
                        selectedOption.classList.add('correct');
                        correct++;
                    } else {
                        selectedOption.classList.add('incorrect');
                        const correctOption = question.querySelector(`[data-value="${correctAnswer}"]`);
                        correctOption.classList.add('correct');
                    }
                }
            });

            const totalScore = correct * pointsPerQuestion;
            const maxScore = total * pointsPerQuestion;

            const resultDiv = document.getElementById(`${quizType}-result`);
            resultDiv.innerHTML = `
                <div style="font-size: 2rem; margin-bottom: 10px;">🏆</div>
                <div style="font-size: 1.5rem; font-weight: 700; margin-bottom: 10px;">Skor: ${totalScore} / ${maxScore}</div>
                <div style="font-size: 1.1rem;">Jawaban Benar: ${correct} dari ${total} soal</div>
                <div style="font-size: 1.3rem; margin-top: 15px;">${correct === total ? '🎉 Sempurna!' : correct >= total * 0.6 ? '👍 Bagus!' : '💪 Terus belajar!'}</div>
            `;
            resultDiv.style.color = correct >= total * 0.6 ? '#4CAF50' : '#FF5722';
            resultDiv.classList.add('show');
        }

        document.addEventListener('click', function(e) {
            if (e.target.classList.contains('quiz-option')) {
                const question = e.target.closest('.quiz-question');
                const options = question.querySelectorAll('.quiz-option');
                
                options.forEach(opt => {
                    opt.classList.remove('selected', 'correct', 'incorrect');
                });
                
                e.target.classList.add('selected');
            }
        });

        async function onConfigChange(newConfig) {
            const baseFont = newConfig.font_family || defaultConfig.font_family;
            const baseFontSize = newConfig.font_size || defaultConfig.font_size;
            
            document.body.style.fontFamily = `${baseFont}, 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif`;
            document.body.style.fontSize = `${baseFontSize}px`;
            
            document.getElementById('main-title').textContent = newConfig.main_title || defaultConfig.main_title;
            document.getElementById('footer-text').textContent = newConfig.footer_text || defaultConfig.footer_text;
            
            const primaryColor = newConfig.primary_color || defaultConfig.primary_color;
            const secondaryColor = newConfig.secondary_color || defaultConfig.secondary_color;
            const backgroundColor = newConfig.background_color || defaultConfig.background_color;
            const textColor = newConfig.text_color || defaultConfig.text_color;
            const buttonColor = newConfig.button_color || defaultConfig.button_color;
            
            document.body.style.background = `linear-gradient(135deg, ${backgroundColor} 0%, #FFE4B5 100%)`;
            
            const headers = document.querySelectorAll('header');
            headers.forEach(header => {
                header.style.background = `linear-gradient(135deg, #FFEBEE 0%, #FCE4EC 100%)`;
                header.style.color = primaryColor;
            });
            
            const navBtns = document.querySelectorAll('.nav-btn');
            navBtns.forEach(btn => {
                btn.style.background = `linear-gradient(135deg, #FFE0B2 0%, #FFCC80 100%)`;
                btn.style.borderColor = secondaryColor;
            });
            
            const h2Elements = document.querySelectorAll('.material-section h2, .hero h2');
            h2Elements.forEach(h2 => {
                h2.style.color = primaryColor;
            });
            
            const h3Elements = document.querySelectorAll('.material-section h3');
            h3Elements.forEach(h3 => {
                h3.style.color = textColor;
            });
            
            const pElements = document.querySelectorAll('.hero p, .material-section p');
            pElements.forEach(p => {
                p.style.color = textColor;
            });
            
            const backBtns = document.querySelectorAll('.back-btn');
            backBtns.forEach(btn => {
                btn.style.background = `linear-gradient(135deg, ${buttonColor} 0%, #0D47A1 100%)`;
            });
        }

        if (window.elementSdk) {
            window.elementSdk.init({
                defaultConfig,
                onConfigChange,
                mapToCapabilities: (config) => ({
                    recolorables: [
                        {
                            get: () => config.background_color || defaultConfig.background_color,
                            set: (value) => {
                                config.background_color = value;
                                window.elementSdk.setConfig({ background_color: value });
                            }
                        },
                        {
                            get: () => config.secondary_color || defaultConfig.secondary_color,
                            set: (value) => {
                                config.secondary_color = value;
                                window.elementSdk.setConfig({ secondary_color: value });
                            }
                        },
                        {
                            get: () => config.text_color || defaultConfig.text_color,
                            set: (value) => {
                                config.text_color = value;
                                window.elementSdk.setConfig({ text_color: value });
                            }
                        },
                        {
                            get: () => config.primary_color || defaultConfig.primary_color,
                            set: (value) => {
                                config.primary_color = value;
                                window.elementSdk.setConfig({ primary_color: value });
                            }
                        },
                        {
                            get: () => config.button_color || defaultConfig.button_color,
                            set: (value) => {
                                config.button_color = value;
                                window.elementSdk.setConfig({ button_color: value });
                            }
                        }
                    ],
                    borderables: [],
                    fontEditable: {
                        get: () => config.font_family || defaultConfig.font_family,
                        set: (value) => {
                            config.font_family = value;
                            window.elementSdk.setConfig({ font_family: value });
                        }
                    },
                    fontSizeable: {
                        get: () => config.font_size || defaultConfig.font_size,
                        set: (value) => {
                            config.font_size = value;
                            window.elementSdk.setConfig({ font_size: value });
                        }
                    }
                }),
                mapToEditPanelValues: (config) => new Map([
                    ["main_title", config.main_title || defaultConfig.main_title],
                    ["footer_text", config.footer_text || defaultConfig.footer_text]
                ])
            });

            if (window.elementSdk.config) {
                config = { ...defaultConfig, ...window.elementSdk.config };
                onConfigChange(config);
            }
        }
    </script>
 <script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'9a0c646183fd4112',t:'MTc2MzUyMDU0My4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script></body>
</html>