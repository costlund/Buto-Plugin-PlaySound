# Buto-Plugin-PlaySound
Play sound.

## PHP
Will render audio element.
```
wfPlugin::includeonce('play/sound');
$sound = new PluginPlaySound();
$sound->play('/plugin/play/sound/beep.mp3');
```

## Javascript
```
var audio = document.createElement("AUDIO");
audio.src = '/plugin/play/sound/beep.mp3';
audio.play();
```

