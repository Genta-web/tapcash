


<div class="dashboard-container">
  <h2>Dashboard Tapcash</h2>
  <div class="table-responsive">
    <table class="dashboard-table">
      <thead>
        <tr>
          <th>A. No Tapcash</th>
          <th>B. Uid</th>
          <th>C. Tipe</th>
          <th>D. Tanggal Expired</th>
          <th>E. Nama</th>
          <th>F. Npp</th>
          <th>G. Keterangan</th>
          <th>H. Perusahaan</th>
          <th>I. Status</th>
        </tr>
      </thead>
      <tbody>
        <!-- Data dihapus, hanya header -->
      </tbody>
    </table>
  </div>
</div>

<style scoped>
.dashboard-container {
  padding: 32px;
  background: #f7f9fb;
  min-height: 100vh;
  font-family: 'Segoe UI', Arial, sans-serif;
}
.dashboard-container h2 {
  margin-bottom: 24px;
  color: #2d3a4a;
  font-weight: 700;
}
.table-responsive {
  overflow-x: auto;
  background: #fff;
  border-radius: 12px;
  box-shadow: 0 2px 8px rgba(0,0,0,0.07);
  padding: 24px;
}
.dashboard-table {
  width: 100%;
  border-collapse: collapse;
  min-width: 900px;
}
.dashboard-table th, .dashboard-table td {
  padding: 12px 16px;
  text-align: left;
}
.dashboard-table th {
  background: #e9eef5;
  color: #2d3a4a;
  font-size: 15px;
  font-weight: 600;
  border-bottom: 2px solid #d1dbe8;
}
.dashboard-table td {
  background: #fff;
  border-bottom: 1px solid #f0f3f7;
  font-size: 14px;
}
.select-cell {
  width: 170px;
  padding: 6px 10px;
  border-radius: 6px;
  border: 1px solid #d1dbe8;
  background: #f7f9fb;
  font-size: 14px;
}
.status-badge {
  display: inline-block;
  padding: 4px 16px;
  border-radius: 16px;
  font-size: 13px;
  font-weight: 600;
  letter-spacing: 1px;
  text-align: center;
}
.status-badge.active {
  background: #2ecc71;
  color: #fff;
}
.status-badge.not-active {
  background: #e74c3c;
  color: #fff;
}
</style>
