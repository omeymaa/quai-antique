<?php
require('./templates/header.php');
require('./templates/navbar.php');
?>
<script src="./scripts/booking.js" defer></script>

<div class="container d-flex align-items-center justify-content-center w-100 p-3">
<section class="wrapper col-4 rounded bg-success-subtle">

    <header class="d-flex align-items-center justify-content-between px-3 pt-4">
        <p class="current-date fw-bold ">Mai 2023</p>
        <div class="icons">
            <span class="material-symbols-rounded rounded">chevron_left</span>
            <span class="material-symbols-rounded rounded">chevron_right</span>
        </div>
    </header>

    <div class="calendar p-2">
        <ul class="weeks d-flex flex-wrap list-unstyled text-center fw-bold">
            <li>LUN.</li>
            <li>MAR.</li>
            <li>MER.</li>
            <li>JEU.</li>
            <li>VEN.</li>
            <li>SAM.</li>
            <li>DIM.</li>
        </ul>
        <ul class="days d-flex flex-wrap list-unstyled text-center mb-4">
            <li class="inactive">28</li>
            <li class="inactive">29</li>
            <li class="inactive">30</li>
            <li class="inactive">31</li>
            <li>1</li>
            <li>2</li>
            <li>3</li>
            <li>4</li>
            <li>5</li>
            <li>6</li>
            <li>7</li>
            <li>8</li>
            <li>9</li>
            <li>10</li>
            <li>11</li>
            <li>12</li>
            <li>13</li>
            <li>14</li>
            <li>15</li>
            <li>16</li>
            <li>17</li>
            <li>18</li>
            <li>19</li>
            <li>20</li>
            <li>21</li>
            <li class="active">22</li>
            <li>23</li>
            <li>24</li>
            <li>25</li>
            <li>26</li>
            <li>27</li>
            <li>28</li>
            <li>29</li>
            <li>30</li>
            <li class="inactive">1</li>
        </ul>
    </div>

</section>
</div>

<?php require('templates/footer.php'); ?>