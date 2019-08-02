<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Mini App</title>
    <style>
      body {
        margin: 0;
		background:#fff;
        padding: 1em;
      }
      
      [data-cart-info],
      [data-credit-card] {
        transform: scale(0.78);
    	margin-left: -3.4em;
      }

      [data-cc-info] input:focus,
      [data-cc-digits] input:focus {
        outline: none;
      }

      .mdc-card__primary-action,
      .mdc-card__primary-action:hover {
        cursor: auto;
        padding: 20px;
        min-height: inherit;
      }
      
      [data-credit-card] [data-card-type] {
        transition: width 1.5s;
        margin-left: calc(100% - 130px);
      }

      .is-visa {
        background: linear-gradient(135deg, #622774 0%, #c53364 100%);
      }

      .is-mastercard {
        background: linear-gradient(135deg, #65799b 0%, #5e2563 100%);
      }

      .is-visa [data-card-type],
      .is-mastercard [data-card-type] {
        width: auto;
      }

      input.is-invalid,
      .is-invalid input {
        text-decoration: line-through;
      }

      ::placeholder {
        color: #fff;
      }
    </style>
  </head>
  <body>
    <script>
      const supportedCards = {
        visa, mastercard
      };
      
      const countries = [
        {
          code: "US",
          currency: "USD",
          country: 'United States'
        },
        {
          code: "NG",
          currency: "NGN",
          country: 'Nigeria'
        },
        {
          code: 'KE',
          currency: 'KES',
          country: 'Kenya'
        },
        {
          code: 'UG',
          currency: 'UGX',
          country: 'Uganda'
        },
        {
          code: 'RW',
          currency: 'RWF',
          country: 'Rwanda'
        },
        {
          code: 'TZ',
          currency: 'TZS',
          country: 'Tanzania'
        },
        {
          code: 'ZA',
          currency: 'ZAR',
          country: 'South Africa'
        },
        {
          code: 'CM',
          currency: 'XAF',
          country: 'Cameroon'
        },
        {
          code: 'GH',
          currency: 'GHS',
          country: 'Ghana'
        }
      ];
      
      const startApp = () => {
      };

      startApp();
    </script>
	<div data-cart-info>
	<h1 class="mdc-typography--headline4">
	<span class="material-icons" style="display:inline; vertical-align:middle; font-size:150px;"/>
	<span class="data-bill" style="display:inline; vertical-align:middle;"/>
	</h1>
</div>
<div data-credit-card class="mdc-card mdc-card--outlined" width="435px" min-height="10px"  style="border-radius: 15px;background-color:#5d6874;"  >
<div class="mdc-card__primary-action">
<img data-card-type src="https://placehold.it/120x60.png?text=Card" style="display:block; width:120px;height:60px;"/>
<div data-cc-digits style="margin-top:2em;">
<input type="text" size="4" placeholder="----" style="color:#fff; font-size:2em; line-height:2em; margin-right:0.5em;background:none; border-style:none;"/>
<input type="text" size="4" placeholder="----"style="color:#fff; font-size:2em; line-height:2em; margin-right:0.5em;background:none;border-style:none;"/>
<input type="text" size="4" placeholder="----"style="color:#fff; font-size:2em; line-height:2em; margin-right:0.5em;background:none;border-style:none;"/>
<input type="text" size="4" placeholder="----"style="color:#fff; font-size:2em; line-height:2em; margin-right:0.5em;background:none;border-style:none;"/>
</div>
<div data-cc-info style="margin-top:1em;">
<input type="text" size="20" placeholder="Name Surname"style="color:#fff; font-size:1.2em;   background:none;border-style:none;"/>
<input type="date" size="6" placeholder="MM/YY" style="color:#fff; font-size:1.2em; padding-right:10px; float:right; background:none;border-style:none;"/>
</div>
</div>
</div>
<button class="mdc-button" data-pay-btn  style="position:fixed; width:90%; border:1px solid; bottom:0px;">Pay & Checkout Now</button>
	</body>
</html>
