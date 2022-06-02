const config = {
  apiKey: "AIzaSyDVvjL7jTic3Fnjx2JKwbh2DBLijJKDkzo",
  authDomain: "simadina-613ff.firebaseapp.com",
  projectId: "simadina-613ff",
  storageBucket: "simadina-613ff.appspot.com",
  messagingSenderId: "718757056068",
  appId: "1:718757056068:web:fca7fd86d3630e821ff611",
  measurementId: "G-36RE37SK6B"
};

firebase.initializeApp(config);

const db = firebase.firestore();

db.setting({
  timestampsInSnapshots: true
});