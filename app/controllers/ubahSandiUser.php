<?php
class UbahSandiUser extends Controller
{
    private $db;
    public function __construct()
    {
        $this->db = Database::getInstance();
    }
    public function index()
    {
        $data['css'] = 'ubahSandi';
        $this->view("templates/header", $data);
        $this->view("templates/sidebar-user");
        $this->view("user/ubah-sandi/index");
        $this->view("templates/footer");
    }

    public function ubahSandiProccess()
    {
        $nomor_identitas = $_SESSION['nomor_identitas'];
        $confirmCurrentPassword = $_SESSION['password'];

        $currentPassword = md5($_POST['sandi_sekarang']);
        $newPassword = md5($_POST['sandi_baru']);
        $confirmPassword = md5($_POST['konfirmasi_sandi']);

        if ($confirmCurrentPassword === $currentPassword) {
            if (strlen($newPassword) <= 12 || strlen($newPassword) >= 8) {
                echo json_encode(['status' => 'password_length']);
                if ($newPassword === $confirmPassword) {
                    $conn = $this->db->getConnection();
    
                    $query = "UPDATE users SET password = ? WHERE nomor_identitas = ?";
    
                    $statement = $conn->prepare($query);
                    $statement->bind_param('ss', $newPassword, $nomor_identitas);
    
                    if ($statement->execute()) {
                        // Berhasil diupdate
                        $_SESSION['password'] = $confirmPassword;
                        echo json_encode(['status' => 'success']);
                    } else {
                        // Gagal diupdate
                        echo json_encode(['status' => 'error']);
                    }
                } else {
                    // Tampilkan pesan bahwa kata sandi baru dan konfirmasi tidak cocok
                    echo json_encode(['status' => 'password_mismatch']);
                }
            } else {
                echo json_encode(['status' => 'invalid_length']);
            }
        } else {
            echo json_encode(['status' => 'old_password_mismatch']);
        }
    }
}
