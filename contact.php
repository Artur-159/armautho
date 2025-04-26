<!DOCTYPE HTML>
<html lang="hy">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, viewport-fit=cover" />
	<meta name="format-detection" content="telephone=no" />
	<meta name="description" content="some description about project" />

	<title>HAYHEGHINAK</title>

	<link rel="stylesheet" href="css/contact/index.css">
	<link rel="stylesheet" media="screen and (min-width: 1025px)" href="css/contact/index-l.css">
	<link rel="stylesheet" media="screen and (max-width: 1024px)" href="css/contact/index-m.css">
	<?php
	include 'templates/favicons.php'
	?>
</head>

<body>
	<?php
	include 'templates/header.php'
	?>
	<div class="content">
		<div class="contact_page">
			<div class="page_container">
				<div class="page_img">
					<picture>
						<source media="(min-width:1200px)" width="1440" height="213" srcset="images/contact_img.jpg 1x, images/contact_img@x2.jpg x2">
						<source media="(min-width:1025px)" width="1170" height="173" srcset="images/contact_img.jpg 1x, images/contact_img@x2.jpg x2">
						<source media="(min-width:769px)" width="994" height="147" srcset="images/contact_img.jpg 1x, images/contact_img@x2.jpg x2">
						<source media="(min-width:576px)" width="738" height="109" srcset="images/contact_img.jpg 1x, images/contact_img@x2.jpg x2">
						<!--size x2-->
						<img src="images/contact_img.jpg" width="395" height="58" alt="" title="" />
						<!--size x2-->
					</picture>
				</div>
				<div class="contact_inner">
					<div class="info_block">
						<h2 class="block_title">Կոնտակտային տվյալներ</h2>
						<ul class="info_list">
							<li>
								<span class="icon_location">"Հայհեղինակ" ՀԿ <br /> ՀՀ, 0009, ք.Երևան, Կորյունի փ. 19 ա</span>
							</li>
							<li>
								<a href="tel:+37410526393" class="icon_phone">+374 10 526393 Հեղինակային բաժին</a>
								<a href="tel:+37410523574">+374 10 523574 Հաշվապահություն</a>
								<a href="tel:+37410527350">+374 10 527350 Տեսուչների բաժին</a>
								<a href="tel:+37410529492">+374 10 529492</a>
							</li>
							<li>
								<a href="mailto:info@armauthor.am" class="icon_mail">info@armauthor.am</a>
								<a href="mailto:international@armauthor.am">international@armauthor.am</a>
							</li>
						</ul>
					</div>
					<div class="form_block">
						<div class="form_section">
							<div class="inner_form">
								<h2 class="block_title">Հետադարձ կապ</h2>
								<form class="field_row">
									<div class="field_block full_field">
										<span class="hidden_label">First name</span>
										<input type="text" name="fullname" aria-label="Your First Name" placeholder="Ձեր անունը" autocomplete="off" maxlength="50" data-validation="required" />
										<span class="error_hint">mandatory field</span>
									</div>
									<div class="field_block full_field">
										<input type="text" name="email" aria-label="example@gmail.com" placeholder="Էլ. հասցե" autocomplete="off" maxlength="50" data-validation="email" />
										<span class="error_hint">
											<span class="standard_hint">mandatory field</span>
											<span class="individual_hint">wrong email</span>
										</span>
									</div>
									<div class="field_block full_field">
										<input type="text" name="telephone" aria-label="phone number" maxlength="9" placeholder="Հեռախոս" autocomplete="off" data-validation="required" oninput="this.value=this.value.replace(/[^0-9]/g,'');" />
										<span class="error_hint">
											<span class="standard_hint">mandatory field</span>
										</span>
									</div>
									<div class="field_block full_field">
										<input type="text" aria-label="Թեմա" placeholder="Թեմա" name="topic" maxlength="50" data-validation="required" autocomplete="off" />
										<span class="error_hint">mandatory field</span>
									</div>
									<div class="field_block full_field">
										<label>
											<textarea name="info" aria-label="Լրացուցիչ տեղեկություն" placeholder="Հաղորդագրություն" rows="5" cols="62"></textarea>
										</label>
										<span class="error_hint">պարտադիր դաշտ</span>
									</div>
									<div class="field_block full_field">
										<button class="validate_btn primary_link" aria-label="ՈՒղարկել">ՈՒղարկել</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="faq_section">
					<div class="inner_section">
						<div class="left_block">
							<img src="images/faq_img.svg" alt="" width="587" height="780" />
						</div>
						<div class="right_block">
							<h2 class="page_title">Հաճախ տրվող հարցեր</h2>
							<ul class="faq_list">
								<li>
									<span class="question_block" data-text="question1">Ի՞նչ է հեղինակային իրավունքը</span>
									<div class="answer_block" data-text="answer1">
										Հեղինակային իրավունքը հեղինակներին օրենքով տրվող պահպանությունն է, ինչը նրանց՝ իրենց ստեղծագործությունները վերահսկելու իրավունք է տալիս: Հեղինակային իրավունքի մասին օրենքը հիմնված է այն համոզմունքի վրա, որ ստեղծագործության հեղինակն արժանի է ողջամիտ փոխհատուցում ստանալու և իրենց ստեղծագործության օգտագործման նկատմամբ վերահսկողության իրավունք ունենալու:Հայաստանում հեղինակային իրավունքի և հարակից իրավունքների մասին օրենքն Ազգային Ժողովի կողմից ընդունվել է 2006 թվի հունիսի 15-ին: ՀՀ քաղաքացիական օրենսգիրքը նույնպես հեղինակային իրավունքի մասին դրույթներ է պարունակում /բաժին 10, հոդվածներ 1100-1143/:
										Մասնավորապես, ՀՀ հեղինակային իրավունքի և հարակից իրավունքների մասին օրենքի 2-րդ հոդվածը սահմանում է, որ հեղինակային իրավունքի և հարակից իրավունքների վերաբերյալ օրենսդրությունը բաղկացած է ՀՀ սահմանադրությունից, ՀՀ քաղաքացիական օրենսգրքից, ՀՀ հեղինակային իրավունքի մասին օրենսդրությունից, այլ օրենքներից և իրավականակտերից, ՀՀ միջազգային համաձայնագրերից:
									</div>
								</li>
								<li>
									<span class="question_block" data-text="question1">Ո՞վ է հեղինակը Որո՞նք են հեղինակի իրավունքները</span>
									<div class="answer_block" data-text="answer1">
										Հեղինակային իրավունքը հեղինակներին օրենքով տրվող պահպանությունն է, ինչը նրանց՝ իրենց ստեղծագործությունները վերահսկելու իրավունք է տալիս: Հեղինակային իրավունքի մասին օրենքը հիմնված է այն համոզմունքի վրա, որ ստեղծագործության հեղինակն արժանի է ողջամիտ փոխհատուցում ստանալու և իրենց ստեղծագործության օգտագործման նկատմամբ վերահսկողության իրավունք ունենալու:Հայաստանում հեղինակային իրավունքի և հարակից իրավունքների մասին օրենքն Ազգային Ժողովի կողմից ընդունվել է 2006 թվի հունիսի 15-ին: ՀՀ քաղաքացիական օրենսգիրքը նույնպես հեղինակային իրավունքի մասին դրույթներ է պարունակում /բաժին 10, հոդվածներ 1100-1143/:
										Մասնավորապես, ՀՀ հեղինակային իրավունքի և հարակից իրավունքների մասին օրենքի 2-րդ հոդվածը սահմանում է, որ հեղինակային իրավունքի և հարակից իրավունքների վերաբերյալ օրենսդրությունը բաղկացած է ՀՀ սահմանադրությունից, ՀՀ քաղաքացիական օրենսգրքից, ՀՀ հեղինակային իրավունքի մասին օրենսդրությունից, այլ օրենքներից և իրավականակտերից, ՀՀ միջազգային համաձայնագրերից:
									</div>
								</li>
								<li>
									<span class="question_block" data-text="question1">Արդյո՞ք գաղափարները պահպանվում են հեղինակային իրավունքով</span>
									<div class="answer_block" data-text="answer1">
										Հեղինակային իրավունքը հեղինակներին օրենքով տրվող պահպանությունն է, ինչը նրանց՝ իրենց ստեղծագործությունները վերահսկելու իրավունք է տալիս: Հեղինակային իրավունքի մասին օրենքը հիմնված է այն համոզմունքի վրա, որ ստեղծագործության հեղինակն արժանի է ողջամիտ փոխհատուցում ստանալու և իրենց ստեղծագործության օգտագործման նկատմամբ վերահսկողության իրավունք ունենալու:Հայաստանում հեղինակային իրավունքի և հարակից իրավունքների մասին օրենքն Ազգային Ժողովի կողմից ընդունվել է 2006 թվի հունիսի 15-ին: ՀՀ քաղաքացիական օրենսգիրքը նույնպես հեղինակային իրավունքի մասին դրույթներ է պարունակում /բաժին 10, հոդվածներ 1100-1143/:
										Մասնավորապես, ՀՀ հեղինակային իրավունքի և հարակից իրավունքների մասին օրենքի 2-րդ հոդվածը սահմանում է, որ հեղինակային իրավունքի և հարակից իրավունքների վերաբերյալ օրենսդրությունը բաղկացած է ՀՀ սահմանադրությունից, ՀՀ քաղաքացիական օրենսգրքից, ՀՀ հեղինակային իրավունքի մասին օրենսդրությունից, այլ օրենքներից և իրավականակտերից, ՀՀ միջազգային համաձայնագրերից:
									</div>
								</li>
								<li>
									<span class="question_block" data-text="question1">Ինչպե՞ս է ծագում հեղինակային իրավունքը</span>
									<div class="answer_block" data-text="answer1">
										Հեղինակային իրավունքը հեղինակներին օրենքով տրվող պահպանությունն է, ինչը նրանց՝ իրենց ստեղծագործությունները վերահսկելու իրավունք է տալիս: Հեղինակային իրավունքի մասին օրենքը հիմնված է այն համոզմունքի վրա, որ ստեղծագործության հեղինակն արժանի է ողջամիտ փոխհատուցում ստանալու և իրենց ստեղծագործության օգտագործման նկատմամբ վերահսկողության իրավունք ունենալու:Հայաստանում հեղինակային իրավունքի և հարակից իրավունքների մասին օրենքն Ազգային Ժողովի կողմից ընդունվել է 2006 թվի հունիսի 15-ին: ՀՀ քաղաքացիական օրենսգիրքը նույնպես հեղինակային իրավունքի մասին դրույթներ է պարունակում /բաժին 10, հոդվածներ 1100-1143/:
										Մասնավորապես, ՀՀ հեղինակային իրավունքի և հարակից իրավունքների մասին օրենքի 2-րդ հոդվածը սահմանում է, որ հեղինակային իրավունքի և հարակից իրավունքների վերաբերյալ օրենսդրությունը բաղկացած է ՀՀ սահմանադրությունից, ՀՀ քաղաքացիական օրենսգրքից, ՀՀ հեղինակային իրավունքի մասին օրենսդրությունից, այլ օրենքներից և իրավականակտերից, ՀՀ միջազգային համաձայնագրերից:
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php
	include 'templates/footer.php'
	?>

	<script type="module" src="js/index.js"></script>
</body>

</html>