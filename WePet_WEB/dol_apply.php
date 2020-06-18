<?php
	include 'process_dol_info.php';

	$sql = "SELECT * FROM 돌보미";
	
	$result = mysqli_query($conn, $sql);
	$list = '';

	while($row = mysqli_fetch_array($result) ){
		$list = $list."<li><a href='page_mat_list.php?id={$row['dolID']}'>{$row['name']}</a></li>";
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>돌보미 - 위펫_비앤비</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="./jquery-ui-1.12.1/jquery-ui.min.css">
	<script src = "js/jquery-3.5.1.js"></script>
	<script src="https://ssl.daumcdn.net/dmaps/map_js_init/postcode.v2.js"></script>
	<script src="./jquery-ui-1.12.1/jquery-ui.min.js"></script>

	<script type="text/javascript">
		$(function(){
			$("#date1, #date2").datepicker({
				dataFormat : 'yy-mm-dd'
			});
		});
	</script>

	<script type="text/javascript">
		function changes(fr) {
			if(fr=="서울") {
				num = new Array("종로구","중구","용산구","성동구","광진구", "동대문구","중랑구","성북구","강북구","도봉구","노원구","은평구","서대문구","마포구","양천구","강서구","구로구","금천구","영등포구","동작구","관악구","서초구","강남구","송파구","강동구");
				vnum = new Array("종로구","중구","용산구","성동구","광진구", "동대문구","중랑구","성북구","강북구","도봉구","노원구","은평구","서대문구","마포구","양천구","강서구","구로구","금천구","영등포구","동작구","관악구","서초구","강남구","송파구","강동구");
				} 
			
			else if(fr=="부산") {
				num = new Array("중구","서구","동구","영도구","부산진구","동래구","남구", "북구", "강서구","해운대구","사하구","금정구","연제구","수영구","사상구");
				vnum = new Array("중구","서구","동구","영도구","부산진구","동래구","남구", "북구", "강서구","해운대구","사하구","금정구","연제구","수영구","사상구");
				}
			else if(fr=="대구") {
				num = new Array("중구","서구","동구","남구","북구","수성구","달서구","달성군");
				vnum = new Array("중구","서구","동구","영도구","부산진구","동래구","남구", "북구", "강서구","해운대구","사하구","금정구","연제구","수영구","달서구");
				}
			else if(fr=="인천") {
				num = new Array("중구","동구","미추홀구","연수구","남동구","부평구","계양구","서구","강화군","옹진군");
				vnum = new Array("중구","동구","미추홀구","연수구","남동구","부평구","계양구","서구","강화군","옹진군");
				}
			else if(fr=="광주") {
				num = new Array("동구","서구","남구","북구","광산구");
				vnum = new Array("동구","서구","남구","북구","광산구");
				}
			else if(fr=="대전") {
				num = new Array("동구","중구","서구","유성구","대덕구");
				vnum = new Array("동구","중구","서구","유성구","대덕구");
				}
			else if(fr=="울산") {
				num = new Array("중구","남구","동구","북구","울주군");
				vnum = new Array("중구","남구","동구","북구","울주군");
				}
			else if(fr=="세종") {
				num = new Array("세종");
				vnum = new Array("세종");
				}
			else if(fr=="경기") {
				num = new Array("수원","성남","안양","안산","용인","부천","광명","평택","과천","오산","시흥","군포","의왕","하남","이천","안성","김포","화성","광주","여주","양평","고양","의정부","동두천","구리","남양주","파주","양주","포천","연천","가평");
				vnum = new Array("수원","성남","안양","안산","용인","부천","광명","평택","과천","오산","시흥","군포","의왕","하남","이천","안성","김포","화성","광주","여주","양평","고양","의정부","동두천","구리","남양주","파주","양주","포천","연천","가평");
				}
			else if(fr=="강원") {
				num = new Array("춘천","원주","강릉","동해","태백","속초","삼척","홍천","횡성","영월","평창","정선","철원","화천","양구","인제","고성","양양");
				vnum = new Array("춘천","원주","강릉","동해","태백","속초","삼척","홍천","횡성","영월","평창","정선","철원","화천","양구","인제","고성","양양");
				}
			else if(fr=="충북") {
				num = new Array("청주","충주","제천","보은","옥천","영동","증평","진천","괴산","음성","단양");
				vnum = new Array("청주","충주","제천","보은","옥천","영동","증평","진천","괴산","음성","단양");
				}
			else if(fr=="충남") {
				num = new Array("천안","공주","보령","아산","서산","논산","계룡","당진","금산","부여","서천","청양","홍성","예산","태안");
				vnum = new Array("천안","공주","보령","아산","서산","논산","계룡","당진","금산","부여","서천","청양","홍성","예산","태안");
				}
			else if(fr=="전북") {
				num = new Array("전주","군산","익산","정읍","남원","김제","완주","진안","무주","장수","임실","순창","고창","부안");
				vnum = new Array("전주","군산","익산","정읍","남원","김제","완주","진안","무주","장수","임실","순창","고창","부안");
				}
			else if(fr=="전남") {
				num = new Array("목포","여수","순천","나주","광양","담양","곡성","구례","고흥","보성","화순","장흥","강진","해남","영암","무안","함평","영광","장성","완도","진도","신안");
				vnum = new Array("목포","여수","순천","나주","광양","담양","곡성","구례","고흥","보성","화순","장흥","강진","해남","영암","무안","함평","영광","장성","완도","진도","신안");
				}
			else if(fr=="경북") {
				num = new Array("포항","경주","김천","안동","구미","영주","영천","상주","문경","경산","군위","의성","청송","영양","청도","고령","성주","칠곡","예천","봉화","울진","울릉");
				vnum = new Array("포항","경주","김천","안동","구미","영주","영천","상주","문경","경산","군위","의성","청송","영양","청도","고령","성주","칠곡","예천","봉화","울진","울릉");
				}
			else if(fr=="경남") {
				num = new Array("창원","진주","통영","사천","김해","밀양","거제","양산","의령","함안","창녕","고성","남해","하동","산청","함양","거창","합천");
				vnum = new Array("창원","진주","통영","사천","김해","밀양","거제","양산","의령","함안","창녕","고성","남해","하동","산청","함양","거창","합천");
				}
			else if(fr=="제주") {
				num = new Array("제주","서귀포");
				vnum = new Array("제주","서귀포");
				}
			for(i=0; i<32; i++) {
				dol_info.sim_addrex.options[0] = null;
				}
			for(i=0;i < num.length;i++) {
			document.dol_info.sim_addrex.options[i] = new Option(num[i],vnum[i]);
				}
			}
	</script>

</head>


<body>
	<div id="navbar">
    	<a id="logo" href="main.php">
      		<img src="images/logo.png" height="50">
    	</a>
 	</div>
 	<div class="match_c_form">
 		<h1>돌보미 정보</h1>
		<form name="dol_info" action="dol_apply.php" method="POST">
			<input type="text" name="name" class="text-field_1 nameInput" placeholder="성명">

			<input type="text" name="phonenumber" class="text-field_1 numberInput" placeholder="연락처">

			<input type="text" name="date_start" class="text-field_date" id="date1" placeholder="시작 날짜">

			<input type="text" name="date_end" class="text-field_date" id="date2" placeholder="종료 날짜">

			<select name="sim_addr" class="text-field_date area1" onchange = "changes(document.dol_info.sim_addr.value)">
				<option value="-">지역</option>
				<option value="서울">서울특별시</option>
				<option value="부산">부산광역시</option>
				<option value="대구">대구광역시</option>
				<option value="인천">인천광역시</option>		
				<option value="광주">광주광역시</option>
				<option value="대전">대전광역시</option>
				<option value="울산">울산광역시</option>
				<option value="세종">세종시</option>
				<option value="경기">경기도</option>
				<option value="강원">강원도</option>
				<option value="충북">충청북도</option>
				<option value="충남">충청남도</option>
				<option value="전북">전라북도</option>
				<option value="전남">전라남도</option>
				<option value="경북">경상북도</option>
				<option value="경남">경상남도</option>
				<option value="제주">제주도</option>
			</select>

			<select name="sim_addrex" class="text-field_date area2">
				<option>상세</option>
			</select>
			
			<input type="text" name="addr" class="text-field_1 addrInput" placeholder="돌봄처 주소">

			<input type="text" name="addrex" class="text-field_2 addrexInput"placeholder="상세주소">

			<button type="button" onclick="openZipSearch()" class="adr-btn">주소검색</button><br>

			<textarea  name="dolCondition" cols="50" rows="10" class="text-field_3 conditionInput" placeholder="돌봄 조건"></textarea>

			<textarea  name="requier" cols="50" rows="10" class="text-field_3 requirementInput" placeholder="요구 사항"></textarea>

			<input type="submit" class="submit-btn" value="등록">
 		</form>
 		<!--<a href="page_dol_new_2.php" class="next"> 다음</a>-->
	</div>



	<div class="match_g_form">

		<h1>맡기미 리스트</h1>
		<div class="match_gin_form">
			<?=$list;?>
		</div>

		<div class="checknot">
			<input type="checkbox" name="not_match">지금 매칭하지 않음</input>
		</div>

	</div>



	<!--데이터 입력 검사, 주소 검색-->
	<script src = "js/new.js"></script>
</body>
</html>