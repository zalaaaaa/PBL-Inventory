<?php
session_start();
class UbahSandi extends Controller
{
    private $db;
    public function __construct()
    {
        $this->db = Database::getInstance();
    }
    public function index()
    {
        $this->view("templates/header");
        if (isset($_SESSION["isAdmin"])) {
            $this->view("templates/sidebar-admin");
            $this->view("admin/ubah-sandi/index");
        } else {
            $this->view("templates/sidebar-user");
            $this->view("user/ubah-sandi/index");
        }
        $this->view("templates/footer");
    }

    public function ubahSandiProccess()
    {
        $nomor_identitas = $_SESSION['nomor_identitas'];
        $confirmCurrentPassword = $_SESSION['password'];

        $currentPassword = md5($_POST['sandi_sekarang']);
        $newPassword = md5($_POST['sandi_baru']);
        $confirmPassword = md5($_POST['konfirmasi_sandi']);

        // echo $currentPassword;

        // var_dump($newPassword === $confirmPassword);
        // echo $confirmCurrentPassword;
        echo "<br>";
        echo $currentPassword;
        if ($confirmCurrentPassword === $currentPassword) {
            if ($newPassword === $confirmPassword) {
                $conn = $this->db->getConnection();

                $query = "UPDATE users SET password = ? WHERE nomor_identitas = ?";

                $statement = $conn->prepare($query);
                $statement->bind_param('ss', $newPassword, $nomor_identitas);

                if ($statement->execute()) {
                    // Berhasil diupdate
                    echo json_encode(['status' => 'success']);
                    echo "sukk";
                    $_SESSION['password'] = $confirmPassword;
                } else {
                    // Gagal diupdate
                    // echo json_encode(['status' => 'error']);
                    echo json_encode(['status' => 'success']);
                }
            } else {
                // Tampilkan pesan bahwa kata sandi baru dan konfirmasi tidak cocok
                echo json_encode(['status' => 'password_mismatch']);
            }
        } else {
            echo json_encode(['status' => 'error']);
        }
    }
}
