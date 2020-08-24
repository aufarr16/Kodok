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

INSERT INTO `mitras` (`ABA`, `nama_mitra`, `added_by`, `modified_by`) VALUES
('002', 'Bank BRI', 'DMR', 'IDE'),
('008', 'Bank Mandiri', 'IDE', NULL),
('009', 'Bank BNI', 'IDE', NULL),
('011', 'Bank Danamon', 'DMR', 'IDE'),
('013', 'Bank Permata', 'DMR', 'IDE'),
('016', 'Maybank Indonesia', 'DMR', NULL),
('019', 'Bank Panin', 'DMR', 'IDE'),
('022', 'Bank CIMB Niaga', 'IDE', NULL),
('023', 'Bank UOB Indonesia', 'IDE', 'DMR'),
('028', 'Bank OCBC NISP', 'DMR', NULL),
('031', 'Citibank', 'DMR', NULL),
('046', 'Bank DBS', 'DMR', NULL),
('050', 'Standard Chartered Bank', 'DMR', 'IDE'),
('054', 'Bank Capital', 'IDE', 'DMR'),
('061', 'ANZ Indonesia', 'DMR', NULL),
('069', 'Bank Of China Indonesia', 'DMR', 'IDE'),
('076', 'Bank Bumi Arta', 'DMR', NULL),
('087', 'Bank HSBC Indonesia', 'IDE', 'DMR'),
('089', 'Rabobank', 'DMR', NULL),
('095', 'Bank JTrust', 'DMR', 'IDE'),
('097', 'Bank Mayapada', 'DMR', NULL),
('110', 'Bank Jabar', 'DMR', NULL),
('111', 'Bank DKI', 'IDE', 'DMR'),
('112', 'Bank BPD DIY', 'DMR', 'IDE'),
('113', 'Bank Jateng', 'DMR', 'IDE'),
('114', 'Bank Jatim', 'IDE', 'DMR'),
('115', 'Bank Jambi', 'IDE', 'DMR'),
('116', 'Bank Aceh', 'IDE', NULL),
('117', 'Bank Sumut', 'DMR', NULL),
('118', 'Bank Nagari', 'DMR', 'IDE'),
('119', 'Bank Riau Kepri', 'DMR', 'IDE'),
('120', 'Bank Sumsel Babel', 'DMR', NULL),
('121', 'Bank Lampung', 'IDE', 'DMR'),
('122', 'Bank Kalsel', 'DMR', 'IDE'),
('123', 'BPD Kalbar', 'DMR', NULL),
('124', 'BPD Kalimantan Timur', 'DMR', 'IDE'),
('125', 'Bank BPD Kalteng', 'IDE', 'DMR'),
('126', 'Bank Sulselbar', 'DMR', 'IDE'),
('127', 'Bank Sulut', 'DMR', NULL),
('128', 'Bank NTB', 'IDE', 'DMR'),
('129', 'Bank BPD Bali', 'DMR', NULL),
('130', 'Bank NTT', 'DMR', NULL),
('131', 'Bank Maluku', 'IDE', NULL),
('132', 'Bank Papua', 'IDE', 'DMR'),
('133', 'Bank Bengkulu', 'IDE', NULL),
('134', 'Bank Sulteng', 'IDE', 'DMR'),
('135', 'Bank Sultra', 'IDE', NULL),
('137', 'Bank Banten', 'DMR', 'IDE'),
('145', 'Bank BNP', 'IDE', NULL),
('146', 'Bank Of India Indonesia', 'DMR', NULL),
('147', 'Bank Muamalat', 'IDE', NULL),
('151', 'Bank Mestika', 'IDE', NULL),
('152', 'Bank Shinhan', 'IDE', 'DMR'),
('153', 'Bank Sinarmas', 'IDE', 'DMR'),
('161', 'Bank Ganesha', 'DMR', NULL),
('164', 'Bank ICBC Indonesia', 'IDE', 'DMR'),
('167', 'Bank QNB Indonesia', 'DMR', 'IDE'),
('200', 'Bank BTN', 'DMR', 'IDE'),
('212', 'Bank Woori Saudara', 'IDE', 'DMR'),
('213', 'Bank BTPN', 'DMR', 'IDE'),
('345', 'Bank AGRIS', 'DMR', NULL),
('360001', 'Artajasa (ACQ Only)', 'IDE', 'DMR'),
('422', 'Bank BRI Syariah', 'IDE', 'DMR'),
('425', 'Bank Jabar Banten Syariah', 'IDE', NULL),
('426', 'Bank Mega', 'IDE', 'DMR'),
('427', 'Bank BNI Syariah', 'IDE', NULL),
('441', 'Bank Bukopin', 'IDE', 'DMR'),
('451', 'Bank Syariah Mandiri', 'IDE', NULL),
('484', 'Bank Keb Hana', 'IDE', 'DMR'),
('485', 'MNC Bank', 'DMR', 'IDE'),
('490', 'Bank Yudha Bhakti', 'DMR', 'IDE'),
('494', 'Bank BRI Agroniaga', 'DMR', NULL),
('503', 'Bank National Nobu', 'DMR', 'IDE'),
('506', 'Bank Mega Syariah', 'DMR', NULL),
('513', 'Bank INA', 'IDE', NULL),
('517', 'Bank Panin Dubai Syariah', 'DMR', 'IDE'),
('521', 'Bank Syariah Bukopin', 'IDE', 'DMR'),
('523', 'Bank Sahabat Sampoerna', 'IDE', 'DMR'),
('526', 'Bank Dinar', 'IDE', 'DMR'),
('535', 'Bank Kesejahteraan Ekonomi', 'IDE', 'DMR'),
('542', 'Bank ARTOS', 'IDE', NULL),
('547', 'Bank BTPN Syariah', 'IDE', 'DMR'),
('553', 'Bank Mayora', 'DMR', 'IDE'),
('555', 'Bank Index', 'IDE', 'DMR'),
('564', 'Bank MANTAP', 'IDE', NULL),
('600', 'BPR/LSB', 'DMR', NULL),
('688', 'BPR KS', 'DMR', 'IDE'),
('789', 'Indosat (Paypro)', 'DMR', 'IDE'),
('808', 'XL Tunai', 'IDE', 'DMR'),
('867', 'BPR Eka', 'DMR', NULL),
('911', 'Telkomsel (TCash)', 'DMR', NULL),
('950', 'Bank CommonWealth', 'IDE', NULL),
('987', 'ATMB Plus', 'IDE', NULL);

INSERT INTO `products` (`id_product`, `nama_product`, `added_by`, `modified_by`) VALUES
(1, 'ATM Bersama', 'DMR', 'IDE'),
(2, 'ATM Bersama Debit', 'DMR', NULL),
(3, 'Payment', 'IDE', NULL),
(4, 'Remittance', 'DMR', NULL),
(5, 'Disbursement', 'IDE', 'DMR'),
(6, 'QR Payment', 'DMR', NULL);

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