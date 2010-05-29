<?php
function calendar($month, $day) {
	echo '<div class="calendar">
		<p class="month">' . $month . '</p>
		<p class="date">' . $day . '</p>
	</div>';
}