moveSliderRight = () => {
  document.getElementById('overlay').classList.remove('overlay-moveHalfLeft');
  document.getElementById('overlayInner').classList.remove('overlayInner-moveHalfRight');
  document.getElementById('signInForm').classList.remove('shiftRight');

  document.getElementById('overlay').classList.add('overlay-moveHalfRight');
  document.getElementById('overlayInner').classList.add('overlayInner-moveHalfLeft');
  document.getElementById('signUpForm').classList.add('shiftLeft');
}
moveSliderLeft = () => {
  document.getElementById('overlay').classList.remove('overlay-moveHalfRight');
  document.getElementById('overlayInner').classList.remove('overlayInner-moveHalfLeft');
  document.getElementById('signUpForm').classList.remove('shiftLeft');

  
  document.getElementById('overlay').classList.add('overlay-moveHalfLeft');
  document.getElementById('overlayInner').classList.add('overlayInner-moveHalfRight');
  document.getElementById('signInForm').classList.add('shiftRight');
}