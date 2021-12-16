<?php

if (!session_id()) session_start();

require_once '../app/init.php';

$app = new App;

// echo '<script>
//         swal({
//           title: "Anda yakin akan menghapus data ini?",
//           text: "Setelah dihapus, data tidak dapat dikembalikan!",
//           icon: "warning",
//           buttons: ["Tidak!", "Ya!"],
//           dangerMode: true,
//         })
//         .then((willDelete) => {
//           if (willDelete) {
//             swal("Data berhasil dihapus!", {
//               icon: "success",
//             });
//           } else {
//             swal("Data tidak dihapus!");
//           }
//         });
//       </script>';
