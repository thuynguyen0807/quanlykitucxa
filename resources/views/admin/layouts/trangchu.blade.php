@extends('admin.layouts.index')
@section('TrangChu')

	
		<div class="container-fluid">
		    <div class="row">
		  		<div class="col-md-9">
				  <br>
				  <div id="myCarousel" class="carousel slide" data-ride="carousel">
				    <!-- Indicators -->
				    <ol class="carousel-indicators">
				      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				      <li data-target="#myCarousel" data-slide-to="1"></li>
				      <li data-target="#myCarousel" data-slide-to="2"></li>
				    </ol>

				    <!-- Wrapper for slides -->
				    <div class="carousel-inner">

				    	<!-- 753x432 -->
				      <div class="item active">
				        <img src="img/slide1.png" alt="slide1" style="width:100%;">
				      </div>

				      <div class="item">
				        <img src="img/slide2.jpg" alt="slide2" style="width:100%;">
				      </div>
				    
				      <div class="item">
				        <img src="img/slide3.jpg" alt="slide3" style="width:100%;">
				      </div>

				      <div class="item">
				        <img src="img/slide4.jpg" alt="slide4" style="width:100%;">
				      </div>
				    </div>

				    <!-- Left and right controls -->
				    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
				      <span class="glyphicon glyphicon-chevron-left"></span>
				      <span class="sr-only">Previous</span>
				    </a>
				    <a class="right carousel-control" href="#myCarousel" data-slide="next">
				      <span class="glyphicon glyphicon-chevron-right"></span>
				      <span class="sr-only">Next</span>
				    </a>
				  </div>
				</div>

				<div class="col-md-3">
					<div id="sub-menu">
						<br>
						<ul>
							<li><a href="#">GIỚI THIỆU CHUNG</a></li>
							<li><a href="#">CÁC BIỂU MẪU, VĂN BẢN</a></li>
							<li><a href="#">THÔNG BÁO</a></li>
							<li><a href="#">PHONG TRÀO - HOẠT ĐỘNG</a></li>
							<li><a href="#">HÌNH ẢNH</a></li>
						</ul>
					</div>
					<img src="img/anh1.jpg" alt="anh1">

				</div>
		  	</div>
			
			<div>
				<h3 class="tieude">GIỚI THIỆU CHUNG</h3>
			</div>

		  	<div class="row">
		  		<div class="col-md-8">
					<div class="text">
						<h4 class="sub-tieude">ĐÔI NÉT VỀ KÍ TÚC XÁ SICT</h4>
						<hr style="width: 770px; border-color: #1976E9;">
					
						<p style="font-size: 20px; color: #1976E9; font-weight: bold;"><span class="glyphicon glyphicon-hand-right" style="margin-right: 10px; color: #1976E9 !important;"></span>Kí túc xá sinh viên SICT</p>
						
						<br>
						<p><span class="glyphicon glyphicon-ok-sign"></span>Ký túc xá Trường Cao đẳng Công nghệ Thông tin - Đại học Đà Nẵng <b> rộng rãi, an toàn, khuôn viên sạch - đẹp, nhiều tiện ích với hơn 1000 chỗ </b> đã sẵn sàng chào đón các bạn tân sinh viên.</p>
						<br>
						<p><span class="glyphicon glyphicon-ok-sign"></span>Ký túc xá Trường CĐ Công nghệ thông tin – Đại học Đà Nẵng được xây dựng tại Làng Đại học Đà Nẵng, P. Hòa Quý, Q. Ngũ Hành Sơn. Từ khi được đầu tư xây dựng thêm phòng nấu ăn riêng tại khu ký túc xá, sinh viên gọi đây là <b> khu ký túc xá “5 sao” đầu tiên ở Đà Nẵng, </b> tạo điều kiện sinh hoạt, học tập thuận lợi cho sinh viên...</p>

						<br>
						<p><span class="glyphicon glyphicon-ok-sign"></span><b>Là dự án đầu tiên được xây dựng có quy mô nhất Miền trung</b>, do UBND TP. Đà Nẵng làm chủ đầu tư từ nguồn vốn trái phiếu của Chính phủ góp phần thực hiện chính sách an sinh xã hội, tạo nơi lưu trú văn minh, hiện đại dành cho sinh viên đang học tập tại các trường đại học, cao đẳng, trung cấp và dạy nghề trên địa bàn TP. Đà Nẵng.</p>  

						<br>
						<p><span class="glyphicon glyphicon-ok-sign"></span><b>Ký túc xá thoáng mát, sạch sẽ, môi trường “xanh, sạch, đẹp” với tiêu chí: “CHUẨN MỰC – VĂN MINH – HIỆN ĐẠI”</b></p>

						<br>
						<p><span class="glyphicon glyphicon-ok-sign"></span>Quản lý sinh viên bằng phần mềm tiên tiến, <b>đặc biệt về an ninh trật tự trong Ký túc xá được đảm bảo,</b> kiểm soát ra, vào có hệ thống camera hỗ trợ giám sát chặt chẽ, có đầy đủ các dịch vụ tiện ích nhằm tạo cho các bạn sinh viên an tâm nghỉ ngơi, học tập, đáp ứng nhu cầu sinh hoạt, vui chơi, giải trí lành mạnh.</p>
					</div>
				</div>

				<div class="col-md-4">
					<br><br><br>
					<a href="#"><img src="img/dangki.jpg" alt="dang ki"></a> <br> <br>
					<a href="#"><img src="img/nopphi.jpg" alt="nop phi"></a> <br> <br>
					<a href="#"><img src="img/congdong.jpg" alt="cong dong"></a>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					<br><br><br><br><br>
					<img src="img/lsht.jpg" alt="lich su hinh thanh">
				</div>

				<div class="col-md-8">
					<div class="text">
						<h4 class="sub-tieude">LỊCH SỬ HÌNH THÀNH</h4>
						<hr style="width: 770px; border-color: #1976E9;">
						<br>
						<p><span class="glyphicon glyphicon-ok-sign" style="color: #FF9517;"></span>Thực hiện Nghị quyết số 18/NQ-CP, Quyết định số 65/2009/QĐ-TTg của Chính phủ về phát triển nhà ở cho học sinh sinh viên các trường đại học, cao đẳng, trung cấp chuyên nghiệp và dạy nghề.</p>
						<br>
						<p><span class="glyphicon glyphicon-ok-sign" style="color: #FF9517;"></span>Quyết định số 4874/QĐ-UBND ngày 29/06/2009 của UBNDTP Đà Nẵng V/v phê duyệt dự án đầu tư Ký túc xá tập trung phục vụ cho học sinh sinh viên các trường đại học, cao đẳng, trung cấp chuyên nghiệp và dạy nghề trên địa bàn TP. Đà Nẵng.</p>
						<br>
						<p><span class="glyphicon glyphicon-ok-sign" style="color: #FF9517;"></span>Công trình Ký túc xá được UBND TP. Đà Nẵng làm chủ đầu tư, giao cho Liên danh Công ty cổ phần Đức Mạnh và Công ty cổ phần đầu tư & xây dựng 579 thi công xây dựng.</p>
						<br>
						<p><span class="glyphicon glyphicon-ok-sign" style="color: #FF9517;"></span>Đưa vào khai thác kể từ tháng 8 năm 2012 ở khu Ký túc xá phía Tây và tháng 8 năm 2013 ở khu Ký túc xá phía Đông. Ban đầu Ký túc xá được thành phố giao cho Liên doanh DMC-579 quản lý vận hành khai thác, đến 01/01/2017 Ký túc xá TP. Đà Nẵng chuyển giao cho “Công ty Quản lý nhà Đà Nẵng” trực tiếp quản lý, vận hành và khai thác.</p>
						<br>
						<p><span class="glyphicon glyphicon-ok-sign" style="color: #FF9517;"></span>Đến ngày 7/9/2018 UBND thành phố Đà Nẵng ký Quyết định số 3918/QĐ-UBND về việc thành lập Trung tâm Quản lý và Khai thác nhà Đà Nẵng trực thuộc Sở Xây dựng trên cơ sở hợp nhất Công ty Quản lý nhà Đà Nẵng và Công ty Quản lý nhà chung cư thành phố Đà Nẵng trực thuộc Sở Xây dựng.</p>
						<br>
						<p><span class="glyphicon glyphicon-ok-sign" style="color: #FF9517;"></span>Ký túc xá thoáng mát, sạch sẽ, môi trường “xanh, sạch, đẹp” với tiêu chí: “CHUẨN MỰC – VĂN MINH – HIỆN ĐẠI”. Quản lý sinh viên bằng phần mềm tiên tiến, đặc biệt về an ninh trật tự trong ký túc xá được đảm bảo,  kiểm soát ra, vào có hệ thống camera hỗ trợ giám sát chặt chẽ, có đầy đủ các dịch vụ tiện ích nhằm tạo cho các bạn Sinh viên an tâm nghỉ ngơi, học tập, đáp ứng nhu cầu sinh hoạt, vui chơi, giải trí lành mạnh.</p>
					</div>

				</div>
			</div>

			<div>
				<h3 class="tieude">CÁC BIỂU MẪU, VĂN BẢN</h3>
			</div>
			<div class="row">
				<div class="col-md-6">
					<h4 class="sub-tieude">MẪU 1: NỘI QUY</h4>
					<hr style="width: 600px; border-color: #1976E9;">
					<img src="img/rules.jpg" alt="noiquy">
					<a href="#">Nhấn vào tệp dưới đây để tải</a> <br>


					<h4 class="sub-tieude">MẪU 2: ĐƠN ĐĂNG KÍ Ở KÍ TÚC XÁ</h4>
					<hr style="width: 600px; border-color: #1976E9;">
					<img src="img/rules.jpg" alt="noiquy">
					<a href="#">Nhấn vào tệp dưới đây để tải</a> <br>


					<h4 class="sub-tieude">MẪU 3: HỢP ĐỒNG NỘI TRÚ KÍ TÚC XÁ</h4>
					<hr style="width: 600px; border-color: #1976E9;">
					<img src="img/rules.jpg" alt="noiquy">
					<a href="#">Nhấn vào tệp dưới đây để tải</a> <br>
		

					<h4 class="sub-tieude">MẪU 4: QUY CHẾ HOẠT ĐỘNG CỦA ĐỘI TỰ QUẢN</h4>
					<hr style="width: 600px; border-color: #1976E9;">
					<img src="img/rules.jpg" alt="noiquy">
					<a href="#">Nhấn vào tệp dưới đây để tải</a> <br>


				</div>

				<div class="col-md-6">
					<h4 class="sub-tieude">MẪU 5: BẢNG PHÂN CÔNG NHIỆM VỤ</h4>
					<hr style="width: 600px; border-color: #1976E9;">
					<img src="img/rules.jpg" alt="noiquy">
					<a href="#">Nhấn vào tệp dưới đây để tải</a> <br>


					<h4 class="sub-tieude">MẪU 6: ĐỀ NGHỊ SỬA CHỮA THIẾT BỊ PHÒNG</h4>
					<hr style="width: 600px; border-color: #1976E9;">
					<img src="img/rules.jpg" alt="noiquy">
					<a href="#">Nhấn vào tệp dưới đây để tải</a> <br>


					<h4 class="sub-tieude">MẪU 7: ĐƠN ĐỀ NGHỊ RÚT TIỀN THẾ CHẤP TÀI SẢN</h4>
					<hr style="width: 600px; border-color: #1976E9;">
					<img src="img/rules.jpg" alt="noiquy">
					<a href="#">Nhấn vào tệp dưới đây để tải</a> <br>


					<h4 class="sub-tieude">MẪU 8: ĐƠN ĐỀ NGHỊ RÚT TIỀN THẾ CHẤP TÀI SẢN</h4>
					<hr style="width: 600px; border-color: #1976E9;">
					<img src="img/rules.jpg" alt="noiquy">
					<a href="#">Nhấn vào tệp dưới đây để tải</a> <br>

					
				</div>
				
			</div>

			<div>
				<h3 class="tieude">THÔNG BÁO</h3>
				<br>
			</div>
			<div class="row">
					<div class="col-md-3">
						<img src="img/thongbaoqt.jpg" alt="thong bao quan trong">
						<p class="thongbao">28/10/2019</p>
						<a href="#" style="text-decoration: inherit;">Tổ quản lý kí túc xá thông báo: Nộp tiền điện nước tháng 10/2019 bắt đầu từ ngày 31/10/2019 đến hết ngày 5/10/2019</a>
					</div>
					<div class="col-md-3">
						<img src="img/thongbaoqt.jpg" alt="thong bao quan trong">
						<p class="thongbao">28/10/2019</p>
						<a href="#" style="text-decoration: inherit;">Tổ quản lý kí túc xá thông báo: Nộp tiền điện nước tháng 10/2019 bắt đầu từ ngày 31/10/2019 đến hết ngày 5/10/2019</a>
					</div>
					<div class="col-md-3">
						<img src="img/thongbao.jpg" alt="thong bao">
						<p class="thongbao">28/10/2019</p>
						<a href="#" style="text-decoration: inherit;">Tổ quản lý kí túc xá thông báo: Nộp tiền điện nước tháng 10/2019 bắt đầu từ ngày 31/10/2019 đến hết ngày 5/10/2019</a>
					</div>
					<div class="col-md-3">
						<img src="img/thongbao.jpg" alt="thong bao">
						<p class="thongbao">28/10/2019</p>
						<a href="#" style="text-decoration: inherit;">Tổ quản lý kí túc xá thông báo: Nộp tiền điện nước tháng 10/2019 bắt đầu từ ngày 31/10/2019 đến hết ngày 5/10/2019</a>
					</div>	
			</div>
			<div style="margin-left: 550px; margin-top: 30px;">
				<a href="#" class="btn btn-info" role="button">Xem thêm</a>
			</div>

			<div><h3 class="tieude">PHONG TRÀO - HOẠT ĐỘNG</h3></div>
			<div class="row">
				<div class="col-md-4">
					<h4 class="sub-tieude">HOẠT ĐỘNG NỔI BẬT</h4>
					<hr style="border-color: #1976E9;">
					<div class="element">
					<img src="img/hoatdong2.jpg" alt="chuong trinh trung thu cho em">
					<a href="#"><b>Chương trình trung thu cho em tại trường tiểu học ABC</b></a> 
					</div>
					<div class="element">
					<img src="img/hoatdong2.jpg" alt="chuong trinh chu nhat xanh">
					<a href="#"><b>Chương trình trung thu cho em tại trường tiểu học ABC</b></a> 
					</div>
					<div class="element">
					<img src="img/hoatdong2.jpg" alt="chuong trinh van nghe">
					<a href="#"><b>Chương trình trung thu cho em tại trường tiểu học ABC<b></a> <br>
					</div>
				</div>

				<div class="col-md-4">
					<h4 class="sub-tieude">HOẠT ĐỘNG SẮP DIỄN RA</h4>
					<hr style="border-color: #1976E9;">
					<div class="element">
					<img src="img/hoatdong2.jpg" alt="ao am mua dong">
					<a href="#"><b>Chương trình áo ấm mùa đông tại làng abc</b></a> <br><br>
					</div>
					<div class="element">
					<img src="img/hoatdong2.jpg" alt="ao am mua dong">
					<a href="#"><b>Chương trình áo ấm mùa đông tại làng abc</b></a> <br><br>
					</div>
					<div class="element">
					<img src="img/hoatdong2.jpg" alt="ao am mua dong">
					<a href="#"><b>Chương trình áo ấm mùa đông tại làng abc</b></a> <br>
					</div>
				</div>
				<div class="col-md-4">
					<video width="400" height="300" style="margin-top: 10px; margin-left: 20px;" controls>
						<source src="video/phongtrao-hoatdong.mp4" type="video/mp4">
					</video>
				</div>
			</div>
			<div style="margin-left: 550px; margin-top: 30px;">
				<a href="#" class="btn btn-info" role="button">Xem thêm</a>
			</div>

			<div><h3 class="tieude">HÌNH ẢNH NỔI BẬT</h3></div>
			<!-- bỏ ảnh vô đây thành hàng ngang và cho nó chạy như slide -->
		</div>
		

@endsection