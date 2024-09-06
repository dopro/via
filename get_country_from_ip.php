<?php
// Hàm để lấy thông tin quốc gia từ địa chỉ IP
function getCountryFromIP($ip) {
    $url = "http://ip-api.com/json/$ip";
    $response = file_get_contents($url);
    $data = json_decode($response, true);
    // Kiểm tra xem có lỗi không
    if ($data['status'] == 'success') {
        // Trả về thông tin về quốc gia, thành phố và múi giờ
        return "IP: {$data['query']} | {$data['city']} | {$data['regionName']} | {$data['countryCode']} | {$data['isp']} | {$data['timezone']}";
    } else {
        return "Không thể lấy thông tin";
    }
}

// Lấy địa chỉ IP từ yêu cầu
$ip = $_GET['ip'];

// Lấy thông tin quốc gia từ địa chỉ IP và trả về
echo getCountryFromIP($ip);
?>
