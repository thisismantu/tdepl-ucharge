
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loan EMI Calculator</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
</head>

<body>
    <h1 class="start" aria-label="Toggle color mode" title="Toggle color mode" onclick="myFunction()">
        <div class="sun visible">
            <i id="dark-mode-btn" class="toggler far fa-sun"></i>
        </div>
        <div class="moon">
            <i id="dark-mode-btn" class="toggler far fa-moon"></i>
        </div>
    </h1>
    <h1 class="head">Loan EMI <span class="innerspan">Calculator</span><iframe class="subtop"
            src="https://github.com/sponsors/sumandey07/button" title="Sponsor sumandey07" loading="lazy"
            frameborder="0" height="32" width="114"></iframe></h1>

    <div class="loan-calculator">
        <div class="top">
            <form action="#">
                <div class="group">
                    <div>
                        <div class="title">Amount (A)</div>
                        <input class="loan-amount" type="text" value="30000" />
                    </div>

                    <div>
                        <div class="title">Interest Rate (R) (in %)</div>
                        <input class="interest-rate" type="text" value="8.5" />
                    </div>

                    <div>
                        <div class="title">Tenure (T) (in months)</div>
                        <input class="loan-tenure" type="text" value="240" />
                    </div>
                    <div>
                        <div class="title">Processing Fees (P) (in %)</div>
                        <input class="processing-fee" type="text" value="1.2" />
                    </div>

                    <div>
                        <div class="title">Down Payment (D)</div>
                        <input class="down-payment" type="text" value="3000" />
                    </div>
                </div>
            </form>
            <div class="group1">
                <button class="calculate-btn">Calculate</button>
            </div>
        </div>

        <div class="result">
            <div class="left">
                <div class="total-down-payment">
                    <h3>Total Down Payment (TDP)<br />(TDP = D + P)</h3>
                    <div class="value">12</div>
                </div>

                <div class="loan-emi">
                    <h3>Loan EMI (LE)</h3>
                    <h4>(LE = [PLA x R x
                        (1+R)^T]/[(1+R)^T-1] )</h4>
                    <div class="value">123</div>
                </div>

                <div class="total-interest">
                    <h3>Total Interest Payable (TIP)<br /> (TIP = LE * T)</h3>
                    <div class="value">1234</div>
                </div>

                <div class="total-amount">
                    <h3>Total Payment (TP)<br />(TP = LA + TIP + P)</h3>
                    <div class="value">12345</div>
                </div>
            </div>

            <div class="right">
                <canvas height="400" id="myChart" width="400"></canvas>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.2.1/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.2.1/dist/ionicons/ionicons.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"></script>
    <script src="main.js"></script>
</body>

</html>