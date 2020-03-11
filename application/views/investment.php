<?php $this->load->view('templates/heading-img'); ?>
<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-lg-3">
            <div class="mt-3 ml-3 welcome-text-horizontal only-horizontal">
                <img src="/assets/img/welcome-logo.png" alt="Welcome Logo" width="100" class="logo">
                <br><br>
                <div class="text-blue">
                    Welcome to the<br>
                    <strong>INVESTMENT CENTER</strong>
                    <br><br>
                    You have $1M to investas you wish
                </div>
                <br><br><br><br>
				<img src="/assets/img/city-logo.png" alt="City Bank" width="80">
            </div>
            <div class="mt-3 mb-5 welcome-text-vertical text-center only-vertical">
                <div class="text-blue">
                    Welcome to the <strong>INVESTMENT CENTER</strong>
                </div>
                <div class="text-light-blue">You have $1M to invest as you wish</div>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="bucks-remaining text-blue">
                <strong class="buck">$350,000</strong><br>
                TTS Bucks remaining
            </div>
            <div class="total-invested">
                65% Invested
            </div>
            <div class="progress">
                <div class="progress-bar bg-dark-blue" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                <div class="progress-bar bg-skype-blue" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                <div class="progress-bar bg-light-blue" role="progressbar" style="width: 35%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="progress text-blue invest-values">
                <div style="width: 10%">$100.000</div>
                <div style="width: 20%">$200.000</div>
                <div style="width: 35%">$350.000</div>
                <div style="width: 35%" class="balance-value">$350.000 Balance</div>
            </div>
            <br>
            <div class="project mt-3">
                <div class="clearfix mb-1">
                    <div class="float-left"><strong class="text-blue">PROJECT 1: </strong> One Account</div>
                    <div class="float-right">
                        <strong class="invested mr-2">$100.000 Invested</strong>
                        <div class="project-color bg-dark-blue"></div>
                        <button class="btn btn-dragon btn-invest">INVEST</button>
                        <button class="btn btn-invest-show" data-toggle="collapse" data-target="#project1-description"></button>
                    </div>
                </div>
                <div class="description collapse show" id="project1-description">
                Description goes here. Consectetur adipiscing elit. Cras ut imperdiet urna, tristique vehicula augue. Morbi id aliquet ligula, ac mattis est. Etiam accumsan, diam ac ullamcorper fringilla, quam metus mollis nisl, vel lacinia dui leo eu velit. Curabitur mollis blandit ligula non consectetur. Curabitur ornare mauris vel nisi pellentesque consequat. 
                </div>
            </div>
        </div>
        <div class="col-lg-12 only-vertical my-3">
			<img src="/assets/img/city-logo.png" alt="City Bank" width="80">
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="investment-modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-center">
                <div class="modal-header-text">
                    <h3 class="text-golden">Project 1</h3>
                    <p>Amount ($125,000 remaining)</p>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <img src="/assets/img/close-btn.png" alt="Close" width="20">
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="form-group money-input">
                        <input type="text" class="dragon-input text-blue">
                        <span class="dollar text-blue">$</span>
                    </div>
                    <div class="form-group">
                        <label for="reason" class="text-light-blue">What are the reasons for investing?<br><span class="small">(optional)</span></label>
                        <textarea name="reason" id="reason" cols="30" rows="9" class="form-control"></textarea>
                    </div>
                    <div class="form-group text-center">
                        <input type="submit" value="INVEST" class="btn btn-dragon">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
$('#investment-modal').modal({
    show: false
});

$('.btn-invest').click(function() {
    $('#investment-modal').modal('show');
});
</script>