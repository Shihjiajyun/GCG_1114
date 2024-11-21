<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>

<body>

    <header class="bg-success bg-gradient text-center text-white py-5">
        <h1>XXX的履歷</h1>
        <p>歡迎來到我的個人履歷網站</p>
    </header>

    <!-- 個人資訊 -->
    <section class="container py-5">
        <h2 class="text-center">個人資訊</h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <ul class="list-group">
                    <li class="list-group-item">姓名：施家畯</li>
                    <li class="list-group-item">聯絡方式：zhao@example.com</li>
                    <li class="list-group-item">電話：+886 000 000 000</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Work Experience Section -->
    <section id="work-experience" class="bg-light py-5">
        <div class="container">
            <h2 class="text-center">工作經歷</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Academia Sinica</h5>
                            <p class="card-text">研究助理（2022年至今）</p>
                            <p class="card-text">負責量子計算相關研究及數據分析。</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">AppWorks</h5>
                            <p class="card-text">區塊鏈工程師（2018-2022）</p>
                            <p class="card-text">開發 GameFi 和穩定收益金融產品。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 聯繫表單 -->
    <section id="contact-form" class="container py-5">
        <h2 class="text-center">聯繫我</h2>
        <!-- 表單容器 -->
        <form action="send_email.php" method="POST">
            <!-- Email 輸入欄位 -->
            <div class="mb-3">
                <label for="email" class="form-label">您的 Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="請輸入您的 Email" required>
            </div>
            <!-- 訊息輸入欄位 -->
            <div class="mb-3">
                <label for="message" class="form-label">訊息內容</label>
                <textarea class="form-control" id="message" name="message" rows="5" placeholder="請輸入您的訊息" required></textarea>
            </div>
            <!-- 提交按鈕 -->
            <div class="text-center">
                <button type="submit" class="btn btn-primary">發送</button>
            </div>
        </form>
    </section>

    <!-- 引入 Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>
