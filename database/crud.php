<?php

class crud {

    private $db;

	public function __construct($conn)
    {
        $this->db = $conn;
    }
	

	public function insert($nama_brg, $harga, $stok, $keterangan)
	{
		try{
            $sql = "INSERT INTO `barangg`(`nama_brg`, `harga`, `stok`, `keterangan`) VALUES (:nama_brg,:harga,:stok,:keterangan)";

            $stmt = $this->db->prepare($sql);

            $stmt->bindparam(':nama_brg',$nama_brg);
            $stmt->bindparam(':harga',$harga);
            $stmt->bindparam(':stok',$stok);
            $stmt->bindparam(':keterangan',$keterangan);

            $stmt->execute();
            return true;
        }catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
	}

    public function get(){
        $sql = "SELECT * FROM `barangg`";
        $results = $this->db->query($sql);
        return $results;
    }

    public function edit($nama_brg,$harga,$stok,$keterangan){
        try{
        $sql = "UPDATE `barangg` SET `nama_brg`=:nama_brg,`harga`=:harga,`stok`=:stok,`keterangan`=:keterangan WHERE nama_brg = :nama_brg";
        $stmt = $this->db->prepare($sql);

            $stmt->bindparam(':nama_brg',$nama_brg);
            $stmt->bindparam(':harga',$harga);
            $stmt->bindparam(':stok',$stok);
            $stmt->bindparam(':keterangan',$keterangan);

            $stmt->execute();
            return true;
        }catch(PDOException $e){
            echo $e->getMessage();
            return false;
        }
    }

    
    // public function add(){
	// 	$barang = new stdClass();
	// 	$barang->nama_brg = null;
	// 	$barang->harga = null;
	// 	$barang->stok = null;
	// 	$barang->keterangan = null;
	// 	$data = array(
	// 		'page' => 'add',
	// 		'row' => $barang
	// 	);
	// 	$this->dashboard->load('dashboard');
	// }

    // public function get(){
	// 	$data['row'] = $this->barang_m->get();
	// }
}
