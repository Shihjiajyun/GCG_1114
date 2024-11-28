<?php
// 引入 PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// 載入 Composer 的自動加載器
require 'vendor/autoload.php';

// 檢查表單是否提交
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 獲取表單資料
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';

    // 驗證 Email 和訊息
    if (filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($message)) {
        // 初始化 PHPMailer
        $mail = new PHPMailer(true);
        try {
            // 郵件伺服器設定
            $mail->isSMTP();                                 // 使用 SMTP
            $mail->Host = 'smtp.gmail.com';                 // SMTP 伺服器
            $mail->SMTPAuth = true;                         // 啟用驗證
            $mail->Username = 'YIUR_EMAIL';       // Gmail 帳號
            $mail->Password = 'YOUR_PASSWORD';        // Gmail 應用程式密碼

            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // 加密方式
            $mail->Port = 465;                              // SMTP 埠號

            // 收件人設定
            $mail->setFrom('YIUR_EMAIL', '履歷網站'); // 這裡仍然使用 SMTP 帳號
            $mail->addAddress('YIUR_EMAIL');         // 收件人（你的信箱）

            // 新增 Reply-To（回覆用戶的 Email）
            $mail->addReplyTo($email, '用戶訊息');

            // 郵件內容設定（支援中文）
            $mail->CharSet = 'UTF-8';                       // 設定字符集為 UTF-8
            $mail->isHTML(true);                            // 設定為 HTML 格式
            $mail->Subject = '履歷網站的聯繫表單訊息';       // 郵件標題（中文）
            $mail->Body = "<h3>來自聯繫表單的訊息</h3>
                           <p><strong>Email:</strong> {$email}</p>
                           <p><strong>訊息內容:</strong></p>
                           <p>{$message}</p>";

            // 發送郵件
            $mail->send();
            echo "訊息已成功寄出！";
        } catch (Exception $e) {
            echo "訊息無法寄出。錯誤: {$mail->ErrorInfo}";
        }
    } else {
        echo "請填寫有效的 Email 和訊息！";
    }
} else {
    echo "無效的請求方法！";
}
?>
