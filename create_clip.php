function create_clip($key, $stream_url, $duration){
$clip_url = 'https://api.neatclip.com/v1/clip/';
$parameter = [
              'api_key'=> $key,
              'stream_url' => $stream_url,
              'clip_duration'=> $duration
			        ];
$created = $clip_url . 'create.php?' . http_build_query($parameter);
$ch = curl_init($created);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);
curl_close($ch);
print_r ($result);
 }
$youtube_url = 'https://www.youtube.com/channel/UCo8wWQvRSoKL57vjv4vyXQw';
create_clip('************************************', $youtube_url, 60);

//replace *********************************, with neatclip api key
// get full live stream url and place the current one from $youtube_url
// Duration of the clip. Default: "60". <-- soruce from neatclips documentation, i have no clue how this really works
					    i'm assuming how lomg you would like the clip to be.
