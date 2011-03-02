<?php $this->load->view('template/header');?>

	
		<div class="content">
    <div class="content_res">
      <div class="leftblock vertsortable">

        <!-- gadget left 1 -->
        <div class="gadget">
          <div class="titlebar vertsortable_head">
            <a href="#" class="hidegadget" rel="hide_block"><img src="images/spacer.gif" alt="picture" width="19" height="33" /></a>
            <h3>Form Example 1</h3>
          </div>
          <div class="gadgetblock">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
            <p><a href="#">Learn more &raquo;</a></p>
          </div>
        </div>
        
        <!-- gadget left 2 -->
        <div class="gadget">
          <div class="titlebar vertsortable_head">
            <a href="#" class="hidegadget" rel="hide_block"><img src="images/spacer.gif" alt="picture" width="19" height="33" /></a>
            <h3>Form Example 2</h3>
          </div>
          <div class="gadgetblock">
            <form action="" method="post" id="form_example" class="form_example">
            <ol>
              <li>
                <label for="name"><strong>Name</strong> (Small input form example)</label>
                <input id="name" name="name" class="text medium" />
              </li>
              <li>
                <label for="address"><strong>Address</strong> (Large input form example)</label>
                <input id="address" name="address" class="text large" />
              </li>
              <li>
                <label for="descr"><strong>Description</strong> (Large input form example)</label>
                <textarea id="descr" name="descr" rows="6" cols="50"></textarea>
              </li>
              <li>
                <label for="multiply"><strong>Multiply</strong> (small input form example)</label>
                <input id="multiply" name="multiply" type="hidden" value="" />
                <input id="multiply1" name="multiply1" class="text small" />
                <input id="multiply2" name="multiply2" class="text small" />
                <input id="multiply3" name="multiply3" class="text small" />
                <div class="clr"></div>
                <label for="multiply1" class="small">example</label>                
                <label for="multiply2" class="small">example</label>                
                <label for="multiply3" class="small">example</label>                
                <div class="clr"></div>
              </li>
              <li>
                <label for="dropdown"><strong>Drop down box</strong></label>
                <select id="dropdown" name="dropdown">
                  <option selected="selected" value="Standart Results">Example 1</option>
                  <option value="Example 2">Example 2</option>
                  <option value="Example 3">Example 3</option>
                  <option value="Example 4">Example 4</option>
                  <option value="Example 5">Example 5</option>
                  <option value="Example 6">Example 6</option>
                </select>
              </li>
              <li>
                <label for="date"><strong>Date</strong></label>
                <input id="date" name="date" type="hidden" value="" />
                <input id="dateyear" name="dateyear" maxlength="4" class="text year" /> /
                <input id="datemonth" name="datemonth" maxlength="2" class="text date" /> /
                <input id="dateday" name="dateday" maxlength="2" class="text date" />
                <div class="clr"></div>
                <label for="dateyear" class="year">YYYY</label>                
                <label for="datemonth" class="date">MM</label>                
                <label for="dateday" class="date">DD</label>                
                <div class="clr"></div>
              </li>
              <li>
                <label for="check"><strong>Checkbox</strong></label>
                <input name="check" type="checkbox" class="checkbox" />Lorem Ipsum is simply dummy text of the printing and typesetting industry.</input>
              </li>
            </ol>
            </form>
            <p><a href="#">Learn more &raquo;</a></p>
          </div>
        </div>

        <!-- gadget left 3 -->
        <div class="gadget">
          <div class="titlebar vertsortable_head">
            <a href="#" class="hidegadget" rel="hide_block"><img src="images/spacer.gif" alt="picture" width="19" height="33" /></a>
            <h3>Administration Options</h3>
          </div>
          <div class="gadgetblock">
            <form action="" method="post" id="form_userstable">
              <table width="100%" border="0" cellspacing="0" cellpadding="0" class="gwlines">
                <tr>
                  <th width="40"><input name="utc1" id="utc1" type="checkbox" /></th>
                  <th width="100">Name</th>
                  <th width="100">Username</th>
                  <th width="90">Date</th>
                  <th width="120">Location</th>
                  <th>E-mail</th>
                  <th colspan="2">Actions</th>
                </tr>
                <tr>
                  <td><input name="utc2" id="utc2" type="checkbox" /></td>
                  <td>John Smith</td>
                  <td>jonnysmi</td>
                  <td>12.24.1980</td>
                  <td>San Francisco, CA</td>
                  <td><a href="mailto:mwwweefail@yahoo.com">mwwweefail@yahoo.com</a></td>
                  <td width="28"><a href="#"><img src="images/pimpa_yes.gif" alt="picture" width="20" height="20" class="tabpimpa" /></a></td>
                  <td width="28"><a href="#"><img src="images/pimpa_no.gif" alt="picture" width="20" height="20" class="tabpimpa" /></a></td>
                </tr>
                <tr>
                  <td><input name="utc3" id="utc3" type="checkbox" /></td>
                  <td>John Smith</td>
                  <td>jonnysmi</td>
                  <td>12.24.1980</td>
                  <td>San Francisco, CA</td>
                  <td><a href="mailto:mail@yahoo.com">mail@yahoo.com</a></td>
                  <td><a href="#"><img src="images/pimpa_yes.gif" alt="picture" width="20" height="20" class="tabpimpa" /></a></td>
                  <td><a href="#"><img src="images/pimpa_no.gif" alt="picture" width="20" height="20" class="tabpimpa" /></a></td>
                </tr>
                <tr class="last">
                  <td><input name="utc4" id="utc4" type="checkbox" /></td>
                  <td>John Smith</td>
                  <td>jonnysmi</td>
                  <td>12.24.1980</td>
                  <td>San Francisco, CA</td>
                  <td><a href="mailto:m13dail@yahoo.com">m13dail@yahoo.com</a></td>
                  <td><a href="#"><img src="images/pimpa_yes.gif" alt="picture" width="20" height="20" class="tabpimpa" /></a></td>
                  <td><a href="#"><img src="images/pimpa_no.gif" alt="picture" width="20" height="20" class="tabpimpa" /></a></td>
                </tr>
              </table>
            </form>

          </div>
        </div>
        
      </div>
      
<?php $this->load->view('template/sidebar');?>
<?php $this->load->view('template/footer');?>
