// window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('get-otp-btn', {
//     'size': 'invisible',
//     'callback': (response) => {
//       // reCAPTCHA solved, allow signInWithPhoneNumber.
//       onSignInSubmit();
//     }
//   });

// const phoneNumber = document.querySelector("#phone").value;
// const appVerifier = window.recaptchaVerifier;
// firebase.auth().signInWithPhoneNumber(phoneNumber, appVerifier)
//     .then((confirmationResult) => {
//       // SMS sent. Prompt user to type the code from the message, then sign the
//       // user in with confirmationResult.confirm(code).
//       window.confirmationResult = confirmationResult;
//       // ...
//     }).catch((error) => {
//       // Error; SMS not sent
//       // ...
//     });
 // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyDKNvIpZMjpZspVUHHl5vQ6WZ--qz48xAM",
    authDomain: "shaktisweets-9484d.firebaseapp.com",
    projectId: "shaktisweets-9484d",
    storageBucket: "shaktisweets-9484d.appspot.com",
    messagingSenderId: "599656726452",
    appId: "1:599656726452:web:e7b02a7c4296c611703ce1"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);

  window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('sign-in-btn', {
    'size': 'invisible',
    'callback': (response) => {
      // reCAPTCHA solved, allow signInWithPhoneNumber.
      onSignInSubmit();
    }
  });

  function sendOTP(){
    const phoneNumber = "+91"+document.getElementById("phone").value;
    // const phoneNumber = "+918459751677";
    const appVerifier = window.recaptchaVerifier;
    firebase.auth().signInWithPhoneNumber(phoneNumber, appVerifier)
        .then((confirmationResult) => {
            window.confirmationResult = confirmationResult;
           console.log(confirmationResult);
           console.log("OTP Sent");
           $(".get-otp-btn").addClass("d-none");
           $(".disable-otp").removeClass("d-none");
           $(".sign-in-btn").removeClass("d-none");
           $(".otp-sent-msg").html("OTP sent. <a href='#'>Click here to Resend </a>");
           $(".get-otp-spinner").addClass("d-none");
        // window.confirmationResult = confirmationResult;
        // ...
        }).catch((error) => {
            $(".get-otp-spinner").addClass("d-none");
            $(".otp-sent-msg").text("Failed to send OTP")
            console.log(error);
            grecaptcha.reset(window.recaptchaWidgetId);
            console.log("OTP not sent");
        // Error; SMS not sent
        // ...
        });
  }

  function verifyOTP(){
    const code = document.getElementById("otp").value;

    confirmationResult.confirm(code).then((result) => {
      // User signed in successfully.
      $(".sign-in-spinner").addClass("d-none");
      console.log("Login success");
      const user = result.user;
      console.log(user)
      // ...
    }).catch((error) => {
      // User couldn't sign in (bad verification code?)
      // ...
      $(".sign-in-spinner").addClass("d-none");
      console.log("error");
      console.log(error);
    });
  }
// Initialize the FirebaseUI Widget using Firebase.
// var ui = new firebaseui.auth.AuthUI(firebase.auth());

// ui.start('#firebaseui-auth-container', {
//     signInOptions: [
//       firebase.auth.PhoneAuthProvider.PROVIDER_ID
//     ],
//     // Other config options...
//   });

// var uiConfig = {
//     callbacks: {
//         signInSuccessWithAuthResult: function(authResult, redirectUrl) {
//         // User successfully signed in.
//         // Return type determines whether we continue the redirect automatically
//         // or whether we leave that to developer to handle.
//         return true;
//       },
//       uiShown: function() {
//         // The widget is rendered.
//         // Hide the loader.
//         document.getElementById('loader').style.display = 'none';
//       }
//     },
//     // Will use popup for IDP Providers sign-in flow instead of the default, redirect.
//     signInFlow: 'popup',
//     signInSuccessUrl: '<url-to-redirect-to-on-success>',
//     signInOptions: [
//       // Leave the lines as is for the providers you want to offer your users.
//       firebase.auth.GoogleAuthProvider.PROVIDER_ID,
//       firebase.auth.FacebookAuthProvider.PROVIDER_ID,
//       firebase.auth.TwitterAuthProvider.PROVIDER_ID,
//       firebase.auth.GithubAuthProvider.PROVIDER_ID,
//       firebase.auth.EmailAuthProvider.PROVIDER_ID,
//       firebase.auth.PhoneAuthProvider.PROVIDER_ID
//     ],
//     // Terms of service url.
//     tosUrl: '<your-tos-url>',
//     // Privacy policy url.
//     privacyPolicyUrl: '<your-privacy-policy-url>'
//   };
  

//   // The start method will wait until the DOM is loaded.
// ui.start('#firebaseui-auth-container', uiConfig);
