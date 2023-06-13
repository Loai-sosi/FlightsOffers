<?php


if (!function_exists('currentSectionData')) {
    function currentSectionData() {
        return 'admin.' . request()->segment(2) . '.data';
    }
}


if (!function_exists('glideAsset')) {
    function glideAsset($path, $options = [])
    {
        if (!$path) return null;
        $signKey = config('services.glide.key');

        try {
            $urlBuilder = \League\Glide\Urls\UrlBuilderFactory::create('/img/', $signKey);
            return asset($urlBuilder->getUrl($path, $options));
        } catch (\Exception $exception) {
            return "";
        }
    }
}


if (!function_exists('fileIcons')) {
    function fileIcons($fileName)
    {
        $img ='';

        $n = strrpos($fileName, '.');
        $ext = ($n === false) ? '' : substr($fileName, $n+1);
        switch ($ext):
         case 'pdf':
             $img = '<svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 70 70">
              <g id="Group_67522" data-name="Group 67522" transform="translate(-1191 -2050)">
                <rect id="Rectangle_34981" data-name="Rectangle 34981" width="70" height="70" rx="12" transform="translate(1191 2050)" fill="#fff"/>
                <g id="Group_66065" data-name="Group 66065" transform="translate(1202.125 2062)">
                  <path id="Path_54104" data-name="Path 54104" d="M14.481,0a2.865,2.865,0,0,0-2.856,2.857v40a2.865,2.865,0,0,0,2.856,2.857H43.043A2.865,2.865,0,0,0,45.9,42.857V11.429L34.475,0Z" transform="translate(-2.025)" fill="#e2e5e7"/>
                  <path id="Path_54105" data-name="Path 54105" d="M45.488,11.451h8.588L42.625,0V8.588A2.871,2.871,0,0,0,45.488,11.451Z" transform="translate(-10.201)" fill="#b0b7bd"/>
                  <path id="Path_54106" data-name="Path 54106" d="M55.088,24.088,46.5,15.5h8.588Z" transform="translate(-11.213 -4.077)" fill="#cad1d8"/>
                  <path id="Path_54107" data-name="Path 54107" d="M38.15,44.807a1.434,1.434,0,0,1-1.428,1.431H5.3a1.434,1.434,0,0,1-1.428-1.431V30.494A1.434,1.434,0,0,1,5.3,29.062H36.721a1.434,1.434,0,0,1,1.428,1.431Z" transform="translate(0 -7.659)" fill="#f15642"/>
                  <path id="Path_54108" data-name="Path 54108" d="M12.32,36.431a.788.788,0,0,1,.777-.79h2.644a2.862,2.862,0,0,1,0,5.723H13.83v1.512a.718.718,0,0,1-.733.789.771.771,0,0,1-.777-.789V36.431Zm1.51.651v2.851h1.911a1.427,1.427,0,0,0,0-2.851Z" transform="translate(-2.221 -9.373)" fill="#fff"/>
                  <path id="Path_54109" data-name="Path 54109" d="M23.534,43.7a.716.716,0,0,1-.79-.708v-6.5a.779.779,0,0,1,.79-.71h2.621c5.23,0,5.116,7.92.1,7.92Zm.721-6.523v5.127h1.9c3.09,0,3.228-5.127,0-5.127Z" transform="translate(-4.962 -9.41)" fill="#fff"/>
                  <path id="Path_54110" data-name="Path 54110" d="M36.268,37.267v1.819h2.919a.885.885,0,0,1,.824.812.8.8,0,0,1-.824.687H36.268v2.4a.678.678,0,0,1-.686.708.727.727,0,0,1-.812-.708v-6.5a.723.723,0,0,1,.812-.71H39.6a.714.714,0,0,1,.8.71.791.791,0,0,1-.8.779H36.268Z" transform="translate(-8.123 -9.408)" fill="#fff"/>
                  <path id="Path_54111" data-name="Path 54111" d="M38.747,51.806H11.625v1.431H38.747a1.434,1.434,0,0,0,1.427-1.431V50.375A1.434,1.434,0,0,1,38.747,51.806Z" transform="translate(-2.025 -13.249)" fill="#cad1d8"/>
                </g>
              </g>
            </svg>';
             break;
            case 'doc':
                $img = '<svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 70 70">
                <g id="Group_67523" data-name="Group 67523" transform="translate(-1191 -2050)">
                  <rect id="Rectangle_34981" data-name="Rectangle 34981" width="70" height="70" rx="12" transform="translate(1191 2050)" fill="#fff"/>
                  <g id="Group_67278" data-name="Group 67278" transform="translate(1202.125 2062)">
                    <path id="Path_54112" data-name="Path 54112" d="M14.481,0a2.865,2.865,0,0,0-2.856,2.857v40a2.865,2.865,0,0,0,2.856,2.857H43.045A2.865,2.865,0,0,0,45.9,42.857V11.429L34.476,0Z" transform="translate(-2.026)" fill="#e2e5e7"/>
                    <path id="Path_54113" data-name="Path 54113" d="M45.487,11.448h8.586L42.625,0V8.586A2.87,2.87,0,0,0,45.487,11.448Z" transform="translate(-10.198)" fill="#b0b7bd"/>
                    <path id="Path_54114" data-name="Path 54114" d="M55.086,24.086,46.5,15.5h8.586Z" transform="translate(-11.211 -4.076)" fill="#cad1d8"/>
                    <path id="Path_54115" data-name="Path 54115" d="M38.151,44.8a1.434,1.434,0,0,1-1.428,1.431H5.3A1.434,1.434,0,0,1,3.875,44.8V30.493A1.434,1.434,0,0,1,5.3,29.063h31.42a1.434,1.434,0,0,1,1.428,1.431Z" transform="translate(0 -7.656)" fill="#50bee8"/>
                    <path id="Path_54116" data-name="Path 54116" d="M10.93,43.695a.717.717,0,0,1-.79-.71v-6.5a.777.777,0,0,1,.79-.71h2.62c5.229,0,5.113,7.918.1,7.918Zm.721-6.522V42.3h1.9c3.089,0,3.225-5.126,0-5.126Z" transform="translate(-1.638 -9.407)" fill="#fff"/>
                    <path id="Path_54117" data-name="Path 54117" d="M26.082,43.709a4,4,0,0,1-4.314-4.12,4.2,4.2,0,0,1,8.41,0A3.99,3.99,0,0,1,26.082,43.709Zm-.126-6.83a2.712,2.712,0,1,0,2.723,2.712A2.619,2.619,0,0,0,25.956,36.879Z" transform="translate(-4.706 -9.306)" fill="#fff"/>
                    <path id="Path_54118" data-name="Path 54118" d="M34.978,39.607A3.851,3.851,0,0,1,38.994,35.5a3.739,3.739,0,0,1,2.62,1.019A.742.742,0,1,1,40.6,37.594a1.975,1.975,0,0,0-1.6-.628,2.472,2.472,0,0,0-2.607,2.643,2.516,2.516,0,0,0,2.607,2.723A2.672,2.672,0,0,0,40.78,41.6a.768.768,0,0,1,1.052.137.789.789,0,0,1-.126,1.075,3.742,3.742,0,0,1-2.713.894A3.771,3.771,0,0,1,34.978,39.607Z" transform="translate(-8.178 -9.334)" fill="#fff"/>
                    <path id="Path_54119" data-name="Path 54119" d="M38.75,51.806H11.625v1.431H38.75a1.434,1.434,0,0,0,1.428-1.431V50.375A1.434,1.434,0,0,1,38.75,51.806Z" transform="translate(-2.026 -13.247)" fill="#cad1d8"/>
                  </g>
                </g>
              </svg>';
                break;

            case 'png':
                $img = '<svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 70 70">
                <g id="Group_67524" data-name="Group 67524" transform="translate(-1191 -2050)">
                  <rect id="Rectangle_34981" data-name="Rectangle 34981" width="70" height="70" rx="12" transform="translate(1191 2050)" fill="#fff"/>
                  <g id="svgexport-6_6_" data-name="svgexport-6 (6)" transform="translate(1174 2062.143)">
                    <path id="Path_54127" data-name="Path 54127" d="M98.857,0A2.865,2.865,0,0,0,96,2.857v40a2.865,2.865,0,0,0,2.857,2.857h28.566a2.865,2.865,0,0,0,2.857-2.857V11.429L118.853,0Z" transform="translate(-58.279)" fill="#e2e5e7"/>
                    <path id="Path_54128" data-name="Path 54128" d="M354.86,11.441h8.581L352,0V8.581A2.869,2.869,0,0,0,354.86,11.441Z" transform="translate(-291.441)" fill="#b0b7bd"/>
                    <path id="Path_54129" data-name="Path 54129" d="M392.581,136.581,384,128h8.581Z" transform="translate(-320.581 -116.574)" fill="#cad1d8"/>
                    <path id="Path_54130" data-name="Path 54130" d="M66.279,255.731a1.433,1.433,0,0,1-1.428,1.43H33.428A1.433,1.433,0,0,1,32,255.731v-14.3A1.433,1.433,0,0,1,33.428,240H64.851a1.433,1.433,0,0,1,1.428,1.43Z" transform="translate(0 -218.585)" fill="#a066aa"/>
                    <g id="Group_66074" data-name="Group 66074" transform="translate(37.436 26.171)">
                      <path id="Path_54131" data-name="Path 54131" d="M92.816,295.095a.787.787,0,0,1,.777-.791h2.643a2.859,2.859,0,0,1,0,5.718H94.323v1.51a.717.717,0,0,1-.731.789.771.771,0,0,1-.777-.789Zm1.507.651v2.847h1.911a1.425,1.425,0,0,0,0-2.847Z" transform="translate(-92.816 -294.204)" fill="#fff"/>
                      <path id="Path_54132" data-name="Path 54132" d="M178.961,295.209c0-.413.092-.812.686-.812.41,0,.5.1.811.4l3.784,4.735v-4.436a.8.8,0,0,1,.721-.791.871.871,0,0,1,.811.791v6.437a.764.764,0,0,1-.606.789,1.149,1.149,0,0,1-.925-.4l-3.784-4.8v4.415a.71.71,0,0,1-.721.789.753.753,0,0,1-.778-.789v-6.324Z" transform="translate(-171.26 -294.204)" fill="#fff"/>
                      <path id="Path_54133" data-name="Path 54133" d="M280.951,300.422a4.34,4.34,0,0,1-2.813.961,3.771,3.771,0,0,1-4.106-4.094,4.076,4.076,0,0,1,4.207-4.1,3.745,3.745,0,0,1,2.607,1.007.741.741,0,0,1-.994,1.1,2.41,2.41,0,0,0-1.613-.721,2.725,2.725,0,0,0-2.72,2.72,2.53,2.53,0,0,0,2.619,2.722,2.909,2.909,0,0,0,1.715-.515v-1.4h-1.715a.7.7,0,1,1,0-1.4h2.287a.783.783,0,0,1,.811.676v2.436A.924.924,0,0,1,280.951,300.422Z" transform="translate(-257.834 -293.184)" fill="#fff"/>
                    </g>
                    <path id="Path_54134" data-name="Path 54134" d="M123.131,417.43H96v1.43h27.131a1.433,1.433,0,0,0,1.428-1.43V416A1.433,1.433,0,0,1,123.131,417.43Z" transform="translate(-58.279 -378.866)" fill="#cad1d8"/>
                  </g>
                </g>
              </svg>';
                break;
            case 'jpg':
                $img = '<svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 70 70">
                <g id="Group_67525" data-name="Group 67525" transform="translate(-1191 -2050)">
                  <rect id="Rectangle_34981" data-name="Rectangle 34981" width="70" height="70" rx="12" transform="translate(1191 2050)" fill="#fff"/>
                  <g id="svgexport-6_7_" data-name="svgexport-6 (7)" transform="translate(1174 2062.143)">
                    <path id="Path_54227" data-name="Path 54227" d="M98.857,0A2.865,2.865,0,0,0,96,2.857v40a2.865,2.865,0,0,0,2.857,2.857h28.567a2.865,2.865,0,0,0,2.857-2.857V11.429L118.854,0Z" transform="translate(-58.281)" fill="#e2e5e7"/>
                    <path id="Path_54228" data-name="Path 54228" d="M354.86,11.439h8.579L352,0V8.579A2.868,2.868,0,0,0,354.86,11.439Z" transform="translate(-291.439)" fill="#b0b7bd"/>
                    <path id="Path_54229" data-name="Path 54229" d="M392.579,136.579,384,128h8.579Z" transform="translate(-320.579 -116.574)" fill="#cad1d8"/>
                    <path id="Path_54230" data-name="Path 54230" d="M66.281,255.729a1.433,1.433,0,0,1-1.428,1.43H33.428A1.433,1.433,0,0,1,32,255.729v-14.3A1.433,1.433,0,0,1,33.428,240H64.852a1.433,1.433,0,0,1,1.428,1.43Z" transform="translate(0 -218.583)" fill="#50bee8"/>
                    <g id="Group_66094" data-name="Group 66094" transform="translate(37.844 26.173)">
                      <path id="Path_54231" data-name="Path 54231" d="M101.377,295.809a.756.756,0,0,1,1.51,0v4.516c0,1.8-.858,2.883-2.835,2.883a2.871,2.871,0,0,1-2.492-1.178c-.583-.7.515-1.7,1.11-.972a1.7,1.7,0,0,0,1.5.709c.639-.023,1.2-.31,1.213-1.441v-4.516Z" transform="translate(-97.394 -294.919)" fill="#fff"/>
                      <path id="Path_54232" data-name="Path 54232" d="M181.344,295.109a.787.787,0,0,1,.778-.789h2.641a2.858,2.858,0,0,1,0,5.717h-1.909v1.51a.718.718,0,0,1-.732.788.771.771,0,0,1-.778-.788v-6.437Zm1.51.651v2.848h1.909a1.425,1.425,0,0,0,0-2.848Z" transform="translate(-173.842 -294.22)" fill="#fff"/>
                      <path id="Path_54233" data-name="Path 54233" d="M272.086,300.435a4.331,4.331,0,0,1-2.813.961,3.769,3.769,0,0,1-4.105-4.094,4.075,4.075,0,0,1,4.207-4.1,3.742,3.742,0,0,1,2.607,1.005.741.741,0,0,1-.994,1.1,2.416,2.416,0,0,0-1.613-.721,2.724,2.724,0,0,0-2.72,2.72,2.531,2.531,0,0,0,2.618,2.722,2.919,2.919,0,0,0,1.714-.515V298.1h-1.714a.7.7,0,1,1,0-1.4h2.286a.782.782,0,0,1,.811.675v2.435A.921.921,0,0,1,272.086,300.435Z" transform="translate(-250.175 -293.2)" fill="#fff"/>
                    </g>
                    <path id="Path_54234" data-name="Path 54234" d="M123.133,417.43H96v1.43h27.133a1.433,1.433,0,0,0,1.428-1.43V416A1.433,1.433,0,0,1,123.133,417.43Z" transform="translate(-58.281 -378.865)" fill="#cad1d8"/>
                  </g>
                </g>
              </svg>';
                break;
            case 'ai':
                $img = '<svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 70 70">
                <g id="Group_67526" data-name="Group 67526" transform="translate(-1191 -2050)">
                  <rect id="Rectangle_34981" data-name="Rectangle 34981" width="70" height="70" rx="12" transform="translate(1191 2050)" fill="#fff"/>
                  <g id="Group_67307" data-name="Group 67307" transform="translate(1202.125 2062.143)">
                    <path id="Path_54120" data-name="Path 54120" d="M14.482,0a2.865,2.865,0,0,0-2.857,2.857v40a2.865,2.865,0,0,0,2.857,2.857H43.05a2.865,2.865,0,0,0,2.857-2.857V11.429L34.48,0Z" transform="translate(-2.032)" fill="#e2e5e7"/>
                    <path id="Path_54121" data-name="Path 54121" d="M45.484,11.436h8.577L42.625,0V8.577A2.867,2.867,0,0,0,45.484,11.436Z" transform="translate(-10.186)" fill="#b0b7bd"/>
                    <path id="Path_54122" data-name="Path 54122" d="M55.077,24.077,46.5,15.5h8.577Z" transform="translate(-11.202 -4.073)" fill="#cad1d8"/>
                    <path id="Path_54123" data-name="Path 54123" d="M38.157,44.788a1.433,1.433,0,0,1-1.428,1.43H5.3a1.433,1.433,0,0,1-1.428-1.43v-14.3A1.433,1.433,0,0,1,5.3,29.063H36.728a1.433,1.433,0,0,1,1.428,1.43Z" transform="translate(0 -7.643)" fill="#f7b84e"/>
                    <path id="Path_54124" data-name="Path 54124" d="M19.724,43.668a.807.807,0,0,1-.366-1.1l3.279-6.412a.774.774,0,0,1,1.418,0l3.222,6.412c.469.891-.915,1.6-1.325.709l-.5-1.006H21.231l-.492,1.006A.853.853,0,0,1,19.724,43.668Zm4.913-2.9-1.291-2.823-1.405,2.823Z" transform="translate(-4.045 -9.38)" fill="#fff"/>
                    <path id="Path_54125" data-name="Path 54125" d="M31.975,36.454a.756.756,0,0,1,1.51,0v6.525a.756.756,0,0,1-1.51,0Z" transform="translate(-7.382 -9.391)" fill="#fff"/>
                    <path id="Path_54126" data-name="Path 54126" d="M38.76,51.8H11.625v1.43H38.76a1.433,1.433,0,0,0,1.428-1.43v-1.43A1.433,1.433,0,0,1,38.76,51.8Z" transform="translate(-2.032 -13.238)" fill="#cad1d8"/>
                  </g>
                </g>
              </svg>
              ';
                break;
            default:
                $img = '<svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 70 70">
                <g id="Group_67526" data-name="Group 67526" transform="translate(-1191 -2050)">
                  <rect id="Rectangle_34981" data-name="Rectangle 34981" width="70" height="70" rx="12" transform="translate(1191 2050)" fill="#fff"/>
                  <g id="Group_67307" data-name="Group 67307" transform="translate(1202.125 2062.143)">
                    <path id="Path_54120" data-name="Path 54120" d="M14.482,0a2.865,2.865,0,0,0-2.857,2.857v40a2.865,2.865,0,0,0,2.857,2.857H43.05a2.865,2.865,0,0,0,2.857-2.857V11.429L34.48,0Z" transform="translate(-2.032)" fill="#e2e5e7"/>
                    <path id="Path_54121" data-name="Path 54121" d="M45.484,11.436h8.577L42.625,0V8.577A2.867,2.867,0,0,0,45.484,11.436Z" transform="translate(-10.186)" fill="#b0b7bd"/>
                    <path id="Path_54122" data-name="Path 54122" d="M55.077,24.077,46.5,15.5h8.577Z" transform="translate(-11.202 -4.073)" fill="#cad1d8"/>
                    <path id="Path_54123" data-name="Path 54123" d="M38.157,44.788a1.433,1.433,0,0,1-1.428,1.43H5.3a1.433,1.433,0,0,1-1.428-1.43v-14.3A1.433,1.433,0,0,1,5.3,29.063H36.728a1.433,1.433,0,0,1,1.428,1.43Z" transform="translate(0 -7.643)" fill="#f7b84e"/>
                    <path id="Path_54124" data-name="Path 54124" d="M19.724,43.668a.807.807,0,0,1-.366-1.1l3.279-6.412a.774.774,0,0,1,1.418,0l3.222,6.412c.469.891-.915,1.6-1.325.709l-.5-1.006H21.231l-.492,1.006A.853.853,0,0,1,19.724,43.668Zm4.913-2.9-1.291-2.823-1.405,2.823Z" transform="translate(-4.045 -9.38)" fill="#fff"/>
                    <path id="Path_54125" data-name="Path 54125" d="M31.975,36.454a.756.756,0,0,1,1.51,0v6.525a.756.756,0,0,1-1.51,0Z" transform="translate(-7.382 -9.391)" fill="#fff"/>
                    <path id="Path_54126" data-name="Path 54126" d="M38.76,51.8H11.625v1.43H38.76a1.433,1.433,0,0,0,1.428-1.43v-1.43A1.433,1.433,0,0,1,38.76,51.8Z" transform="translate(-2.032 -13.238)" fill="#cad1d8"/>
                  </g>
                </g>
              </svg>
              ';

                endswitch;
        return $img;
    }
}
if (!function_exists('formatNotificationCount')) {
    function formatNotificationCount($notificationCount) {
        if ($notificationCount > 100) {
            return '99+';
        }
        return $notificationCount;
    }
}




if (!function_exists('arrayExcept')) {
    function arrayExcept($array, $except = [])
    {
        return Arr::except($array, $except);
    }
}



if (!function_exists('contactBasedUsername')) {
    function contactBasedUsername($user, $anotherUser)
    {
        if (is_null($anotherUser->s_phone)) {
            return null;
        }

        $contact = $user->contacts()->where('s_phone', $anotherUser->s_phone)->first();

        if ($contact && $contact->s_name) {
            return $contact->s_name;
        }

        return $anotherUser->s_first_name . ' ' . $anotherUser->s_last_name;
    }
}
