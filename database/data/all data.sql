INSERT INTO `documents_types` (`id_DocType`, `nama_DocType`) VALUES
(1, 'MOM Kickoff Meeting'),
(2, 'Nodin Penugasan'),
(3, 'Dokumen Jadwal'),
(4, 'Memo Dinas'),
(5, 'Form Pendaftaran Jaringan Devel'),
(6, 'Form SIT'),
(7, 'Form UAT'),
(8, 'Laporan Harian SIT'),
(9, 'Laporan Harian UAT'),
(10, 'Laporan Harian Regresi Tahap 1'),
(11, 'Laporan Harian Stress Test Tahap 1'),
(12, 'Laporan Harian Regresi Tahap 2'),
(13, 'Laporan Harian Stress Test Tahap 2'),
(14, 'Laporan Final Pengujian'),
(15, 'Form Bako'),
(16, 'Form BAE'),
(17, 'Form BA Stress Test'),
(18, 'MOM Migrasi'),
(19, 'Jadwal Migrasi'),
(20, 'Form Permintaan Perubahan'),
(21, 'Form Pendaftaran Jaringan Prod'),
(22, 'Memo Dinas Migrasi '),
(23, 'Form Migrasi'),
(24, 'Form Base24'),
(25, 'Form Gapura'),
(26, 'Form Pra-TO'),
(27, 'Form TO'),
(28, 'Form BATO'),
(29, 'Laporan Monitoring Harian'),
(30, 'Laporan Final Monitoring'),
(31, 'Memo Dinas Monitoring'),
(32, 'BA Serah Terima Monitoring'),
(33, 'Nodin Balasan');

INSERT INTO `mitras` (`ABA`, `nama_mitra`) VALUES
('002', 'Bank BRI'),
('008', 'Bank Mandiri'),
('009', 'Bank BNI'),
('011', 'Bank Danamon'),
('013', 'Bank Permata'),
('016', 'Maybank Indonesia'),
('019', 'Bank Panin'),
('022', 'Bank CIMB Niaga'),
('023', 'Bank UOB Indonesia'),
('028', 'Bank OCBC NISP'),
('031', 'Citibank'),
('046', 'Bank DBS'),
('050', 'Standard Chartered Bank'),
('054', 'Bank Capital'),
('061', 'ANZ Indonesia'),
('069', 'Bank Of China Indonesia'),
('076', 'Bank Bumi Arta'),
('087', 'Bank HSBC Indonesia'),
('089', 'Rabobank'),
('095', 'Bank JTrust'),
('097', 'Bank Mayapada'),
('110', 'Bank Jabar'),
('111', 'Bank DKI'),
('112', 'Bank BPD DIY'),
('113', 'Bank Jateng'),
('114', 'Bank Jatim'),
('115', 'Bank Jambi'),
('116', 'Bank Aceh'),
('117', 'Bank Sumut'),
('118', 'Bank Nagari'),
('119', 'Bank Riau Kepri'),
('120', 'Bank Sumsel Babel'),
('121', 'Bank Lampung'),
('122', 'Bank Kalsel'),
('123', 'BPD Kalbar'),
('124', 'BPD Kalimantan Timur'),
('125', 'Bank BPD Kalteng'),
('126', 'Bank Sulselbar'),
('127', 'Bank Sulut'),
('128', 'Bank NTB'),
('129', 'Bank BPD Bali'),
('130', 'Bank NTT'),
('131', 'Bank Maluku'),
('132', 'Bank Papua'),
('133', 'Bank Bengkulu'),
('134', 'Bank Sulteng'),
('135', 'Bank Sultra'),
('137', 'Bank Banten'),
('145', 'Bank BNP'),
('146', 'Bank Of India Indonesia'),
('147', 'Bank Muamalat'),
('151', 'Bank Mestika'),
('152', 'Bank Shinhan'),
('153', 'Bank Sinarmas'),
('161', 'Bank Ganesha'),
('164', 'Bank ICBC Indonesia'),
('167', 'Bank QNB Indonesia'),
('200', 'Bank BTN'),
('212', 'Bank Woori Saudara'),
('213', 'Bank BTPN'),
('345', 'Bank AGRIS'),
('360001', 'Artajasa (ACQ Only)'),
('422', 'Bank BRI Syariah'),
('425', 'Bank Jabar Banten Syariah'),
('426', 'Bank Mega'),
('427', 'Bank BNI Syariah'),
('441', 'Bank Bukopin'),
('451', 'Bank Syariah Mandiri'),
('484', 'Bank Keb Hana'),
('485', 'MNC Bank'),
('490', 'Bank Yudha Bhakti'),
('494', 'Bank BRI Agroniaga'),
('503', 'Bank National Nobu'),
('506', 'Bank Mega Syariah'),
('513', 'Bank INA'),
('517', 'Bank Panin Dubai Syariah'),
('521', 'Bank Syariah Bukopin'),
('523', 'Bank Sahabat Sampoerna'),
('526', 'Bank Dinar'),
('535', 'Bank Kesejahteraan Ekonomi'),
('542', 'Bank ARTOS'),
('547', 'Bank BTPN Syariah'),
('553', 'Bank Mayora'),
('555', 'Bank Index'),
('564', 'Bank MANTAP'),
('600', 'BPR/LSB'),
('688', 'BPR KS'),
('789', 'Indosat (Paypro)'),
('808', 'XL Tunai'),
('867', 'BPR Eka'),
('911', 'Telkomsel (TCash)'),
('950', 'Bank CommonWealth'),
('987', 'ATMB Plus');

INSERT INTO `products` (`id_product`, `nama_product`) VALUES
(1, 'ATM Bersama'),
(2, 'ATM Bersama Debit'),
(3, 'Payment'),
(4, 'Remittance'),
(5, 'Disbursement'),
(6, 'QR Payment');

INSERT INTO `projects_keterangans` (`id_pketerangan`, `nama_pketerangan`) VALUES
(1, 'Approved'),
(2, 'Menunggu Approval'),
(3, 'Decline');

INSERT INTO `projects_stats` (`id_pstat`, `nama_pstat`) VALUES
(1, 'Reserve'),
(2, 'On Progress'),
(3, 'Pengujian Done'),
(4, 'Projek Done'),
(5, 'Hold'),
(6, 'Drop');

INSERT INTO `projects_types` (`id_ptype`, `nama_ptype`) VALUES
(1, 'Internal Test '),
(2, 'Sertifikasi'),
(3, 'Regresi'),
(4, 'Support'),
(5, 'QA');

INSERT INTO `users_levels` (`id_ulevel`, `nama_ulevel`) VALUES
(1, 'Admin'),
(2, 'Manager'),
(3, 'Engineer'),
(4, 'Guest'),
(5, 'Admin x Engineer');

INSERT INTO `users` (`id_user`, `id_ulevel`, `nama_users`, `email_users`, `inisial_users`, `log_users`, `added_by`, `modified_by`) VALUES 
(1, '5', 'Ismi Destiawati', 'ismi.destiawati@artajasa.co.id', 'IDE', NULL, 'IDE', NULL), 
(2, '5', 'Devi Mayang Sari', 'devi.sari@artajasa.co.id', 'DMR', NULL, 'IDE', NULL), 
(3, '2', 'Arief Aji Pratopo', 'arief.aji@artajasa.co.id', 'AAP', NULL, 'IDE', 'DMR'), 
(4, '3', 'Hadi Santoso', 'hadi.santoso@artajasa.co.id', 'HSO', NULL, 'DMR', 'IDE'), 
(5, '3', 'Yudha Bagus Pratidana', 'yudha.pratidana@artajasa.co.id', 'YBP', NULL, 'DMR', 'IDE'), 
(6, '3', 'Nadia Sepriani', 'nadia.sepriani@artajasa.co.id', 'NSP', NULL, 'DMR', NULL), 
(7, '3', 'Muchammad Wijdan Alyosa', 'muchammad.alyosa@artajasa.co.id', 'MWA', NULL, 'DMR', 'DMR');


INSERT INTO `projects` (`id_project`, `waktu_assign_projek`, `id_pketerangan`, `id_pstat`, `id_ptype`, `id_product`, `id_user`, `ABA`, `nama_projek`, `status_handover`, `pketerangan_note`) VALUES

(1, '2020-08-18', 2, 3, 1, 3, 1, '111', 'Internal Test Penambahan Channel Autodebet BPJS di Bank DKI', 0, NULL),

(2, '2020-08-18', NULL, 1, 2, 6, 5, '425', 'Implementasi QRIS MPM as Issuer di BJBS', 0, NULL),

(3, '2020-08-18', NULL, 3, 3, 2, 2, '110', 'Regresi Debit GPN MNC Bank', 0, NULL),

(4, '2020-08-18', NULL, 2, 2, 5, 6, '125', 'Implementasi Disbursement pada Mitra Gudang Voucher', 1, NULL),

(5, '2020-08-18', 1, 3, 5, 1, 7, '002', 'Pengembangan Front End Bersamaku', 1, NULL),

(6, '2020-08-18', 3, 3, 2, 4, 4, '145', 'Sertifikasi Remittance untuk Mitra Ahayda', 1, NULL);



INSERT INTO `projects_handovers` (`id_handover`, `id_user`, `id_project`, `waktu_assign_handover`, `waktu_selesai_handover`) VALUES

(1, 6, 4, '2020-08-24', NULL),

(2, 7, 5, '2020-08-25', NULL),

(3, 4, 6, '2020-08-26', NULL);



INSERT INTO `documents` (`id_document`, `id_project`, `id_DocType`, `nama_document`, `softcopy_status`, `hardcopy_status`) VALUES

(1, 1, 2, 'Permintaan pembukaan koneksi untuk internal test penambahan channel autodebet BPJS di Bank DKI', 1, 0),

(2, 1, 5, 'Form untuk pendaftaran jaringan devel terkait pembukaan koneksi penambahan autodebet BPJS bank DKI', 1, 0),

(3, 2, 2, 'Permintaan pembukaan koneksi untuk implementasi QRIS MPM BJBS di BJBS', 1, 0),

(4, 2, 15, 'Berita Acara Kesiapan Operasional implmentasi QRIS MPM di BJBS', 1, 1),

(5, 2, 16, 'Berita Acara Eksepsi implmentasi QRIS MPM di BJBS', 0, 1),

(6, 3, 2, 'Permintaan pembukaan koneksi untuk regresi GPN Debit di bank MNC', 1, 0),

(7, 3, 6, 'Test script pengujian Debit di bank MNC', 0, 0),

(8, 6, 2, 'Permintaan pembukaan koneksi untuk sertifikasi remittance pada mitra Ahayda', 0, 0),

(9, 6, 15, 'Berita Acara Kesiapan Operasional sertifikasi remittance pada mitra Ahayda', 0, 0),

(10, 6, 16, 'Berita Acara Eksepsi sertifikasi remittance pada mitra Ahayda', 0, 0);