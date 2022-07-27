<!-- =================================right sidebar================================ -->
		<div class="right-side">
			<div id="seatview-right">
		    <fieldset id="cart_place">
		        <legend>Seat Information:</legend>
		        <table class="cart" id="">
		            <tbody>
		                <tr>
		                    <th> Seat No</th>
		                    <th id="fare_th" class="tckt_no_th">Fare(taka)</th>
		                </tr>
		                <tr>
		                    <td>
		                        <hr>
		                        	<span><?php echo get_data_from_form("setno","No Seat Selected."); ?></span>
		                        <hr>
		                    </td>
		                    <td class="tckt_fare_td">
		                        <hr>
		                        	<?php echo is_select_a_set("setno","550","0"); ?>
		                        <hr>
		                    </td>
		                </tr>
		                <tr>
		                    <td class="centre_align">TOTAL SEAT # <span id="totseat_span"> <?php echo is_select_a_set("setno","1","0"); ?></span></td>
		                    <td class="centre_align tckt_fare_td"> TOTAL FARE : <span id="totlatk_span"><?php echo is_select_a_set("setno","550","0"); ?></span> </td>
		                </tr>
		                <tr>
		                    <td class="centre_align"></td>
		                    <td class="centre_align tckt_fare_td" style=""> SERVICE CHARGE : <span id="servicecharge_span"> 0</span> </td>
		                </tr>
		                <tr>
		                    <td class="centre_align"></td>
		                    <td class="centre_align tckt_fare_td"> CONVENIENCE CHARGE : <span id="bankcharge_span" style=""> 0 </span> </td>
		                </tr>
		                <tr>
		                    <td class="centre_align"> <span> </span></td>
		                    <td class="tckt_fare_td"></td>
		                </tr>
		                <tr>
		                    <td class="centre_align"> <span> </span></td>
		                    <td class="centre_align tckt_fare_td"> NET FARE : <span id="net_fare_span"> <?php echo is_select_a_set("setno","550","0"); ?></span> </td>
		                    <td class="action_td"></td>
		                </tr>
		            </tbody>
		        </table>
		    </fieldset>
		    <fieldset id="passenger_feildset">
		        <legend>PERSONAL Information:</legend>
		        <form action="" method="get" accept-charset="utf-8">
		        <table class="payment_info">
		            <tbody>
		                <tr>
		                    <td class="td_right_align">Name :* </td>
		                    <td>
		                        <input type="text" name="name" style="" required></td>
		                    <td class="td_right_align"> Mobile :* </td>
		                    <td>
		                        <input type="" name="mobile_no" required>
		                    </td>
		                </tr>
		                <tr id="useremailaddress_tr">
		                    <td class="td_right_align"> E-mail :* </td>
		                    <td>
		                    	<input type="" name="email" required>
		                    </td>

		                    <td class="td_right_align">Address :* </td>
		                    <td>
		                        <input type="text" name="address" required>
		                    </td>
		                </tr>
		                <tr>
		                    <td class="td_right_align"> Gender :* </td>
		                    <td>
		                        <select class="user_gender" name="gender">
		                            <option value="">---</option>
		                            <option value="Female">Female</option>
		                            <option selected="selected" value="Male">Male</option>
		                        </select> 
		                    </td>
		                    <td class="td_right_align"> Age : </td>
		                    <td>
		                        <input type="number" name="age" required="">
		                    </td>
		                </tr>
		                <tr>
		                    <td class="td_right_align"> Pass/N.ID :* </td>
		                    <td>
		                       <input type="text" name="id_no" required> 
		                   </td>
		                    <td class="td_right_align"> Nationality :* </td>
		                    <td>
		                        <select class="user_nationality" name="nationality" required>
		                            <option value="">---</option>
		                            <option value="india">Indian</option>
		                            <option selected="selected" value="bangladesh">Bangladeshi</option>
		                        </select> 
		                    </td>
		                </tr>
		                <tr>
		                    <td class="td_right_align"> BOARDING POINT :* </td>
		                    <td>
		                        <select class="select seatbookig-bordingpoint" name="boarding_point" required>
		                            <option value=""> Select a boarding point</option>
		                            <option value="Khulna">Khulna </option>
		                            <option value="Jessore">Jessore </option>
		                            <option value="Nwapara">Nwapara </option>
		                            <option value="Dhaka">Dhaka </option>
		                            <option value="Sylhet">Sylhet </option>
		                            <option value="chittagong">chittagong </option>
		                        </select> 
		                    </td>
		                    <td class="td_right_align"> DROPPING POINT:* </td>
		                    <td>
		                        <select class="select seatbookig-dropingpoint" name="dropping_point" required>
		                            <option value=""> Select a droping point</option>
		                            <option value="Khulna">Khulna </option>
		                            <option value="Jessore">Jessore </option>
		                            <option value="Nwapara">Nwapara </option>
		                            <option value="Dhaka">Dhaka </option>
		                            <option value="Sylhet">Sylhet </option>
		                            <option value="chittagong">chittagong </option>
		                        </select> 
		                    </td>
		                </tr>
		                <tr>
		                    <td class="td_right_align"> PAYMENT Method:* </td>
		                    <td>
		                        <select class="bank_payment" name="payment_method" required>
		                            <option value=""> Select payment Gareway</option>
		                            <option btrackcode="Dutch" applied="4" value="DBBL">DBBL</option>
		                            <option btrackcode="Bkash" applied="4" value="bKash">bKash</option>
		                            <option btrackcode="SureCash" applied="4" value="SureCash">SureCash</option>
		                            <option btrackcode="CityBank" applied="4" value="Rocket">Rocket</option>
		                            <option btrackcode="Ific" applied="4" value="Nogod">Nogod</option>
		                        </select> 
		                    </td>

		                    <td class="td_right_align">Tranjection ID :* </td>
		                    <td>
		                        <input type="text" name="tranjection_id" style="" required>
		                    </td>
		                    
		                </tr>
		              
		                <tr>
		                    <td colspan="4">
		                    	<input type="text" name="taka" value='<?php echo is_select_a_set("setno","550","0"); ?>' style="" hidden>
		                    	<input type="text" name="seat_no" value='<?php echo get_data_from_form("setno","No Seat Selected."); ?>' style="" hidden>
		                    	<input type="text" name="id" value='<?php echo get_data_from_form("id","No Seat Selected."); ?>' style="" hidden>
		                        <input value="pending" type="checkbox" name="termconditions" id="termconditions" checked="checked">I agree to all the <a href="#"> Terms and Conditions </a> </td>
		                </tr>
		                <tr>
		                    <td colspan="4">
		                        <div class="buttons">
		                            <input type="submit" value="Confirm" class="confirm-button" name="update">
		                        </div>
		                    </td>
		                </tr>
		            </tbody>
		        </table>
		        </form>
		    </fieldset>
			</div>

		</div>