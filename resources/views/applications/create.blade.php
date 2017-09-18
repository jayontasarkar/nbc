@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				{{ entobn(date('Y')) . '-' . entobn(date('Y') + 1) }} অর্থবছরে বেসরকারি গ্রন্থাগারে অনুদান প্রদানের জন্য আবেদনপত্র
			</div>
			<div class="panel-body">
				<form action="" method="POST">
					{{ csrf_field() }}
					<table class="table table-bordered">
						<tbody>
							<tr>
								<td style="width: 50%;">
									(ক) গ্রন্থাগারের নাম<br>
									<br><br>
									(খ) গ্রন্থাগারিকের পূর্ণ ঠিকানা (পোস্ট কোড নং সহ)
									<br><br>
									(গ) জেলা
									<br><br>
									(ঘ) প্রতিষ্ঠার সাল ও তারিখ
								</td>
								<td style="width: 50%;">
									<div class="clearfix">
										<div style="width: 7%; float: left; padding-top: 7px;">
											(ক)
										</div>
										<div style="width: 93%; float: left;">
											<input type="text" class="form-control" name="library_name">
										</div>
									</div>
									<div class="clearfix" style="margin-top: 15px;">
										<div style="width: 7%; float: left; padding-top: 7px;">
											(খ)
										</div>
										<div style="width: 93%; float: left;">
											<input type="text" class="form-control" name="library_address">
										</div>
									</div>
									<div class="clearfix" style="margin-top: 15px;">
										<div style="width: 7%; float: left; padding-top: 7px;">
											(গ)
										</div>
										<div style="width: 93%; float: left;">
											<select name="area_id" id="" class="form-control select2">
												@foreach($areas as $div)
													<optgroup label="{{ $div->tag }}">
														@foreach($div->children as $dist)
															<option value="{{ $dist->id }}">
																{{ $dist->tag }}
															</option>
														@endforeach
													</optgroup>
												@endforeach
											</select>
										</div>
									</div>
									<div class="clearfix" style="margin-top: 15px;">
										<div style="width: 7%; float: left; padding-top: 7px;">
											(ঘ)
										</div>
										<div style="width: 93%; float: left;">
											<input type="text" class="form-control datepicker" name="establishment_date">
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td style="width: 50%;">
									রেজিস্ট্রিকৃত/তালিকাভুক্ত হয়ে থাকলে তা যে দপ্তর/অফিস থেকে করা হয়েছে<br>
									<span>(ক) তার নাম</span>
									<br><br>
									(খ) রেজিস্ট্রেশন/তালিকাভুক্তির নং
									<br><br>
									(গ) রেজিস্ট্রেশন/তালিকাভুক্তির তারিখ
								</td>
								<td style="width: 50%;">
									<div class="clearfix" style="margin-top: 15px;">
										<div style="width: 7%; float: left; padding-top: 7px;">
											(ক)
										</div>
										<div style="width: 93%; float: left;">
											<input type="text" class="form-control" name="registrar_office_name">
										</div>
									</div>
									<div class="clearfix" style="margin-top: 15px;">
										<div style="width: 7%; float: left; padding-top: 7px;">
											(খ)
										</div>
										<div style="width: 93%; float: left;">
											<input type="text" class="form-control" name="registration_no">
										</div>
									</div>
									<div class="clearfix" style="margin-top: 15px;">
										<div style="width: 7%; float: left; padding-top: 7px;">
											(গ)
										</div>
										<div style="width: 93%; float: left;">
											<input type="text" class="form-control datepicker" name="registration_date">
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td style="width: 50%;">
									গ্রন্থাগারের ঘর/নিজস্ব দালান আছে কি না?
								</td>
								<td style="width: 50%;">
									<span style="margin-left: 40px;">
										<input type="radio" name="library_has_own_room" id="" checked value="1">হ্যাঁ
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<input type="radio" name="library_has_own_room" id="" value="0">না
									</span>
								</td>
							</tr>
							<tr>
								<td style="width: 50%;">
									(উত্তর না-বোধক হলে) গ্রন্থাগারের কার্যক্রম কোথায় পরিচালিত হয়?
								</td>
								<td style="width: 50%; padding-left: 43px;">
									<input type="text" class="form-control" name="alternate_library_room">
								</td>
							</tr>
							<tr>
								<td style="width: 50%;">
									গ্রন্থাগারের পরিচালনা কমিটির সভাপতির<br>
									<span> (ক) নাম</span>
									<br><br>
									(খ) ঠিকানা
									<br><br>
									(গ) মোবাইল নম্বর
								</td>
								<td style="width: 50%;">
									<div class="clearfix" style="margin-top: 15px;">
										<div style="width: 7%; float: left; padding-top: 7px;">
											(ক)
										</div>
										<div style="width: 93%; float: left;">
											<input type="text" class="form-control" name="library_president_name">
										</div>
									</div>
									<div class="clearfix" style="margin-top: 15px;">
										<div style="width: 7%; float: left; padding-top: 7px;">
											(খ)
										</div>
										<div style="width: 93%; float: left;">
											<input type="text" class="form-control" name="library_president_addr">
										</div>
									</div>
									<div class="clearfix" style="margin-top: 15px;">
										<div style="width: 7%; float: left; padding-top: 7px;">
											(গ)
										</div>
										<div style="width: 93%; float: left;">
											<input type="text" class="form-control" name="library_president_mobile">
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td style="width: 50%;">
									গ্রন্থাগারের পরিচালনা কমিটির সাধারণ সম্পাদকের<br>
									<span> (ক) নাম</span>
									<br><br>
									(খ) ঠিকানা
									<br><br>
									(গ) মোবাইল নম্বর
								</td>
								<td style="width: 50%;">
									<div class="clearfix" style="margin-top: 15px;">
										<div style="width: 7%; float: left; padding-top: 7px;">
											(ক)
										</div>
										<div style="width: 93%; float: left;">
											<input type="text" class="form-control" name="library_gs_name">
										</div>
									</div>
									<div class="clearfix" style="margin-top: 15px;">
										<div style="width: 7%; float: left; padding-top: 7px;">
											(খ)
										</div>
										<div style="width: 93%; float: left;">
											<input type="text" class="form-control" name="library_gs_addr">
										</div>
									</div>
									<div class="clearfix" style="margin-top: 15px;">
										<div style="width: 7%; float: left; padding-top: 7px;">
											(গ)
										</div>
										<div style="width: 93%; float: left;">
											<input type="text" class="form-control" name="library_gs_mobile">
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td style="width: 50%;">
									গ্রন্থাগারের গ্রন্থাগারকের<br>
									<span> (ক) নাম</span>
									<br><br>
									(খ) ঠিকানা
									<br><br>
									(গ) মোবাইল নম্বর
								</td>
								<td style="width: 50%;">
									<div class="clearfix" style="margin-top: 15px;">
										<div style="width: 7%; float: left; padding-top: 7px;">
											(ক)
										</div>
										<div style="width: 93%; float: left;">
											<input type="text" class="form-control" name="librarian_name">
										</div>
									</div>
									<div class="clearfix" style="margin-top: 15px;">
										<div style="width: 7%; float: left; padding-top: 7px;">
											(খ)
										</div>
										<div style="width: 93%; float: left;">
											<input type="text" class="form-control" name="librarian_addr">
										</div>
									</div>
									<div class="clearfix" style="margin-top: 15px;">
										<div style="width: 7%; float: left; padding-top: 7px;">
											(গ)
										</div>
										<div style="width: 93%; float: left;">
											<input type="text" class="form-control" name="librarian_mobile">
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td style="width: 50%;">
									গ্রন্থাগারের ব্যাংক হিসাব সম্পর্কিত তথ্য<br>
									<span> (ক) হিসাবের শিরোনাম</span>
									<br><br>
									(খ) হিসাব নং
									<br><br>
									(গ) শাখার নাম
									<br><br>
									(ঘ) ব্যাংকের নাম
									<br><br>
									(ঙ) ব্যাংকটি যে উপজেলায় অবস্থিত তার নাম
									<br><br>
									(চ) জেলার নাম
								</td>
								<td style="width: 50%;">
									<div class="clearfix" style="margin-top: 15px;">
										<div style="width: 7%; float: left; padding-top: 7px;">
											(ক)
										</div>
										<div style="width: 93%; float: left;">
											<input type="text" class="form-control" name="library_bank_account_title">
										</div>
									</div>
									<div class="clearfix" style="margin-top: 15px;">
										<div style="width: 7%; float: left; padding-top: 7px;">
											(খ)
										</div>
										<div style="width: 93%; float: left;">
											<input type="text" class="form-control" name="library_bank_account_no">
										</div>
									</div>
									<div class="clearfix" style="margin-top: 15px;">
										<div style="width: 7%; float: left; padding-top: 7px;">
											(গ)
										</div>
										<div style="width: 93%; float: left;">
											<input type="text" class="form-control" name="library_bank_branch">
										</div>
									</div>
									<div class="clearfix" style="margin-top: 15px;">
										<div style="width: 7%; float: left; padding-top: 7px;">
											(ঘ)
										</div>
										<div style="width: 93%; float: left;">
											<input type="text" class="form-control" name="library_bank_name">
										</div>
									</div>
									<div class="clearfix" style="margin-top: 15px;">
										<div style="width: 7%; float: left; padding-top: 7px;">
											(ঙ)
										</div>
										<div style="width: 93%; float: left;">
											<input type="text" class="form-control" name="bank_branch_upozilla">
										</div>
									</div>
									<div class="clearfix" style="margin-top: 15px;">
										<div style="width: 7%; float: left; padding-top: 7px;">
											(চ)
										</div>
										<div style="width: 93%; float: left;">
											<input type="text" class="form-control" name="bank_branch_district">
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td style="width: 50%;">
									গ্রন্থাগারের কোনো গঠনতন্ত্র আছে কি না?
								</td>
								<td style="width: 50%;">
									<span style="margin-left: 40px;">
										<input type="radio" name="has_constitution" id="" checked value="1">হ্যাঁ
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<input type="radio" name="has_constitution" id="" name="0">না
									</span>
								</td>
							</tr>
							<tr>
								<td style="width: 50%;">
									বিগত সময়ে প্রাপ্ত অনুদানের বিবরণ<br>
									<span> (ক) অর্থবছর</span>
									<br><br>
									(খ) অনুদানের পরিমাণ
									<br><br>
									(গ) অনুদানের উৎস
								</td>
								<td style="width: 50%;">
									<div class="clearfix" style="margin-top: 15px;">
										<div style="width: 7%; float: left; padding-top: 7px;">
											(ক)
										</div>
										<div style="width: 93%; float: left;">
											<select name="grant_year" id="" class="form-control select2">
												@for($i = (integer) (date('Y') - 6); $i < (integer) date('Y'); $i++)
													<option value="{{ $i . '-' . ($i + 1) }}">
														{{ entobn($i . '-' . ($i + 1)) }}
													</option>
												@endfor
											</select>
										</div>
									</div>
									<div class="clearfix" style="margin-top: 15px;">
										<div style="width: 7%; float: left; padding-top: 7px;">
											(খ)
										</div>
										<div style="width: 93%; float: left;">
											<input type="text" class="form-control" name="grant_amount">
										</div>
									</div>
									<div class="clearfix" style="margin-top: 15px;">
										<div style="width: 7%; float: left; padding-top: 7px;">
											(গ)
										</div>
										<div style="width: 93%; float: left;">
											<input type="text" class="form-control" name="grant_source">
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td style="width: 50%;">
									গত এক বছরে কার্যক্রম<br>
									(ক) বইপাঠ প্রতিযোগিতার বিবরণ
									<br><br>
									(খ) অন্যান্য কার্যক্রম
								</td>
								<td style="width: 50%;">
									<div class="clearfix" style="margin-top: 10px;">
										<div style="width: 7%; float: left; padding-top: 7px;">
											(ক)
										</div>
										<div style="width: 93%; float: left;">
											<input type="text" class="form-control" name="last_year_reading_content">
										</div>
									</div>
									<div class="clearfix" style="margin-top: 25px;">
										<div style="width: 7%; float: left; padding-top: 7px;">
											(খ)
										</div>
										<div style="width: 93%; float: left;">
											<input type="text" class="form-control" name="last_year_other_activities">
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td style="width: 50%;">
									বর্তমানে গ্রন্থাগারে মোট বইয়ের সংখ্যা
								</td>
								<td style="width: 50%; padding-left: 43px;">
									<input type="text" class="form-control" name="library_book_qty">
								</td>
							</tr>
							<tr>
								<td style="width: 50%;">
									গত বছর সংগৃহিত মোট বইয়ের<br>
									(ক) সংখ্যা
									<br><br>
									(খ) মূল্য
								</td>
								<td style="width: 50%;">
									<div class="clearfix" style="margin-top: 10px;">
										<div style="width: 7%; float: left; padding-top: 7px;">
											(ক)
										</div>
										<div style="width: 93%; float: left;">
											<input type="text" class="form-control" name="last_year_collected_books_qty">
										</div>
									</div>
									<div class="clearfix" style="margin-top: 25px;">
										<div style="width: 7%; float: left; padding-top: 7px;">
											(খ)
										</div>
										<div style="width: 93%; float: left;">
											<input type="text" class="form-control" name="last_year_collected_books_price">
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td style="width: 50%;">
									পাঠকের জন্য গ্রন্থাগারে দৈনিক পত্রিকা/সাময়িকী রাখা হলে তার নাম:
								</td>
								<td style="width: 50%; padding-left: 43px;">
									<input type="text" class="form-control" name="daily_newspaper_name">
								</td>
							</tr>
							<tr>
								<td style="width: 50%;">
									প্রতিদিন গ্রন্থাগারে উপস্থিত পাঠকের সংখ্যা
								</td>
								<td style="width: 50%; padding-left: 43px;">
									<input type="text" class="form-control" name="daily_readers_qty">
								</td>
							</tr>
							<tr>
								<td style="width: 50%;">
									চলতি বছর প্রস্তাবিত বাজেটে প্রত্যাশিত মোট আয়<br>
									<span>(ক) বেসরকারি সহায়তা</span>
									<br><br>
									(খ) সরকারি অনুদান
									<br><br>
									(গ) নিজস্ব আয়
									<br><br>
									(ঘ) সদস্য/পাঠকচাঁদI
								</td>
								<td style="width: 50%;">
									<div class="clearfix" style="margin-top: 15px;">
										<div style="width: 7%; float: left; padding-top: 7px;">
											(ক)
										</div>
										<div style="width: 93%; float: left;">
											<input type="text" class="form-control" name="current_year_expected_private_grant">
										</div>
									</div>
									<div class="clearfix" style="margin-top: 15px;">
										<div style="width: 7%; float: left; padding-top: 7px;">
											(খ)
										</div>
										<div style="width: 93%; float: left;">
											<input type="text" class="form-control" name="current_year_expected_govt_grant">
										</div>
									</div>
									<div class="clearfix" style="margin-top: 15px;">
										<div style="width: 7%; float: left; padding-top: 7px;">
											(গ)
										</div>
										<div style="width: 93%; float: left;">
											<input type="text" class="form-control" name="current_year_expected_own_income">
										</div>
									</div>
									<div class="clearfix" style="margin-top: 15px;">
										<div style="width: 7%; float: left; padding-top: 7px;">
											(ঘ)
										</div>
										<div style="width: 93%; float: left;">
											<input type="text" class="form-control" name="current_year_expected_membership_fee">
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td style="width: 50%;">
									গ্রন্থাগারের ব্যায়ের খাতসমূহ<br>
									<span>(ক) গ্রন্থাগারিক/অন্যান্য কর্মীদের বেতন/ভাতাদি/সম্মানী (যদি থাকে)</span>
									<br><br>
									(খ) আসবাবপত্র ক্রয়
									<br><br>
									(গ) জ্বালানি/বিদ্যুৎ খরচ
									<br><br>
									(ঘ) পত্রিকা ক্রয়
									<br><br>
									(ঙ) বই ক্রয়
									<br><br>
									(চ) অন্যান্য
								</td>
								<td style="width: 50%;">
									<div class="clearfix" style="margin-top: 15px;">
										<div style="width: 7%; float: left; padding-top: 7px;">
											(ক)
										</div>
										<div style="width: 93%; float: left;">
											<input type="text" class="form-control" name="library_staff_salary">
										</div>
									</div>
									<div class="clearfix" style="margin-top: 15px;">
										<div style="width: 7%; float: left; padding-top: 7px;">
											(খ)
										</div>
										<div style="width: 93%; float: left;">
											<input type="text" class="form-control" name="library_furniture_exp">
										</div>
									</div>
									<div class="clearfix" style="margin-top: 15px;">
										<div style="width: 7%; float: left; padding-top: 7px;">
											(গ)
										</div>
										<div style="width: 93%; float: left;">
											<input type="text" class="form-control" name="library_electricity_bill">
										</div>
									</div>
									<div class="clearfix" style="margin-top: 15px;">
										<div style="width: 7%; float: left; padding-top: 7px;">
											(ঘ)
										</div>
										<div style="width: 93%; float: left;">
											<input type="text" class="form-control" name="library_newspaper_buy">
										</div>
									</div>
									<div class="clearfix" style="margin-top: 15px;">
										<div style="width: 7%; float: left; padding-top: 7px;">
											(ঙ)
										</div>
										<div style="width: 93%; float: left;">
											<input type="integer" class="form-control" name="library_book_buy">
										</div>
									</div>
									<div class="clearfix" style="margin-top: 15px;">
										<div style="width: 7%; float: left; padding-top: 7px;">
											(চ)
										</div>
										<div style="width: 93%; float: left;">
											<input type="text" class="form-control" name="library_other_buy">
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td style="width: 50%;">
									গ্রন্থাগার রেজিস্ট্রেশনকালে প্রত্যয়নকারীর<br>
									<span>(ক) নাম</span>
									<br><br>
									(খ) পদবী
									<br><br>
									(গ) ঠিকানা
									<br><br>
									(ঘ) মোবাইল নং
								</td>
								<td style="width: 50%;">
									<div class="clearfix" style="margin-top: 15px;">
										<div style="width: 7%; float: left; padding-top: 7px;">
											(ক)
										</div>
										<div style="width: 93%; float: left;">
											<input type="text" class="form-control" name="issuer_name">
										</div>
									</div>
									<div class="clearfix" style="margin-top: 15px;">
										<div style="width: 7%; float: left; padding-top: 7px;">
											(খ)
										</div>
										<div style="width: 93%; float: left;">
											<input type="text" class="form-control" name="issuer_designation">
										</div>
									</div>
									<div class="clearfix" style="margin-top: 15px;">
										<div style="width: 7%; float: left; padding-top: 7px;">
											(গ)
										</div>
										<div style="width: 93%; float: left;">
											<input type="text" class="form-control" name="issuer_addr">
										</div>
									</div>
									<div class="clearfix" style="margin-top: 15px;">
										<div style="width: 7%; float: left; padding-top: 7px;">
											(ঘ)
										</div>
										<div style="width: 93%; float: left;">
											<input type="text" class="form-control" name="issuer_mobile">
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td style="width: 50%;">
									সর্বশেষ পরিদর্শনকালে পরিদর্শনকারীর<br>
									<span>(ক) নাম</span>
									<br><br>
									(খ) পদবী
									<br><br>
									(গ) ঠিকানা
									<br><br>
									(ঘ) মোবাইল নং
								</td>
								<td style="width: 50%;">
									<div class="clearfix" style="margin-top: 15px;">
										<div style="width: 7%; float: left; padding-top: 7px;">
											(ক)
										</div>
										<div style="width: 93%; float: left;">
											<input type="text" class="form-control" name="inspector_name">
										</div>
									</div>
									<div class="clearfix" style="margin-top: 15px;">
										<div style="width: 7%; float: left; padding-top: 7px;">
											(খ)
										</div>
										<div style="width: 93%; float: left;">
											<input type="text" class="form-control" name="inspector_designation">
										</div>
									</div>
									<div class="clearfix" style="margin-top: 15px;">
										<div style="width: 7%; float: left; padding-top: 7px;">
											(গ)
										</div>
										<div style="width: 93%; float: left;">
											<input type="text" class="form-control" name="inspector_addr">
										</div>
									</div>
									<div class="clearfix" style="margin-top: 15px;">
										<div style="width: 7%; float: left; padding-top: 7px;">
											(ঘ)
										</div>
										<div style="width: 93%; float: left;">
											<input type="text" class="form-control" name="inspector_addr">
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td style="width: 50%;">
									লাইব্রেরির ছবি আপলোড
								</td>
								<td style="width: 50%; padding-left: 43px;">
									<input type="file" name="library_picture" id="">
								</td>
							</tr>
							<tr>
								<td colspan="2" class="text-center" style="padding-top: 25px;">
									<input type="reset" value="তথ্য বাতিল করুন" class="btn btn-default">
									<input type="submit" value="আবেদন করুন" class="btn btn-info">
								</td>
							</tr>
						</tbody>
					</table>
				</form>
			</div>
		</div>
	</div>
</div>
@stop

@section('script')
<script type="text/javascript">
	$(document).ready(function() {
		$('.select2').select2();
		$( ".datepicker" ).datepicker({
			dateFormat : 'mm/dd/yy',
            changeMonth: true,
            changeYear: true,
            yearRange: "{{ \Carbon\Carbon::now()->subYears(80)->format('Y') . ':' . \Carbon\Carbon::now()->format('Y') }}"
		});
	});
</script>
@endsection