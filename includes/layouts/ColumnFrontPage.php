<?php

class ColumnFrontPage
{

  public function __construct($posts)
  {
    $this->posts = $posts;
  }

  public function render()
  {

    return
      "
        <articel class=\"columnList__item columnItem js-borderAnimation columnItem--hover columnItem--br\"> 
          <a href=\"{$this->posts[0]->guid}\" class=\"columnItem__link\">
            <h3 class=\"columnItem__title\">{$this->posts[0]->post_title}</h3>
            <p class=\"columnItem__excerpt\">
              {$this->posts[0]->post_excerpt}
            </p>
          </a>
        </articel>

        <articel class=\"columnList__item columnItem js-borderAnimation columnItem--hover\">
          <a href=\"{$this->posts[1]->guid}\" class=\"columnItem__link\">
            <h3 class=\"columnItem__title\">{$this->posts[1]->post_title}</h3>
            <p class=\"columnItem__excerpt\">
              {$this->posts[1]->post_excerpt}
            </p>
          </a>
        </articel>

        <articel class=\"columnList__item columnItem js-borderAnimation columnItem--hover columnItem--bl\">
          <a href=\"{$this->posts[2]->guid}\" class=\"columnItem__link\">
            <h3 class=\"columnItem__title\">{$this->posts[2]->post_title}</h3>
            <p class=\"columnItem__excerpt\">
              {$this->posts[2]->post_excerpt}
            </p>
          </a>
        </articel>

        <articel class=\"columnList__item columnItem js-borderAnimation columnItem--hover columnItem--br\">
          <a href=\"{$this->posts[3]->guid}\" class=\"columnItem__link\">
            <h3 class=\"columnItem__title\">{$this->posts[3]->post_title}</h3>
            <p class=\"columnItem__excerpt\">
              {$this->posts[3]->post_excerpt}
            </p>
          </a>
        </articel>

        <articel class=\"columnList__item columnItem js-borderAnimation columnItem--hover columnItem--bl\">
          <a href=\"{$this->posts[4]->guid}\" class=\"columnItem__link\">
            <h3 class=\"columnItem__title\">{$this->posts[4]->post_title}</h3>
            <p class=\"columnItem__excerpt\">
              {$this->posts[4]->post_excerpt}
            </p>
          </a>
        </articel>

        <div class=\"columnList__item columnItem js-borderAnimation columnItem--title\">

          <svg class=\"columnItem__svg\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 427.972 339.094\">
            <g class=\"js-column\" id=\"グループ_2691\" data-name=\"グループ 2691\" transform=\"translate(-24 -91.304)\">
              <path class=\"js-olumn\" id=\"パス_605\" data-name=\"パス 605\"
                d=\"M21.684,0a7.173,7.173,0,0,1-4.758-1.443,8.481,8.481,0,0,1-2.535-3.783,20.217,20.217,0,0,1-1.014-5.382q-.2-3.042-.195-6.162t.195-6.123a20.118,20.118,0,0,1,1.014-5.343,8.481,8.481,0,0,1,2.535-3.783,7.173,7.173,0,0,1,4.758-1.443,7.173,7.173,0,0,1,4.758,1.443,8.481,8.481,0,0,1,2.535,3.783,20.118,20.118,0,0,1,1.014,5.343q.195,3,.195,6.123t-.195,6.162a20.217,20.217,0,0,1-1.014,5.382,8.481,8.481,0,0,1-2.535,3.783A7.173,7.173,0,0,1,21.684,0Zm0-34.554a19.412,19.412,0,0,0-7.527,1.443A19.877,19.877,0,0,0,8.112-29.25,17.4,17.4,0,0,0,4.095-23.6,16.577,16.577,0,0,0,2.652-16.77a16.761,16.761,0,0,0,1.443,6.9A17.4,17.4,0,0,0,8.112-4.212,19.3,19.3,0,0,0,14.157-.39a19.885,19.885,0,0,0,7.527,1.4,19.885,19.885,0,0,0,7.527-1.4,19.3,19.3,0,0,0,6.045-3.822,17.4,17.4,0,0,0,4.017-5.655,16.761,16.761,0,0,0,1.443-6.9A16.577,16.577,0,0,0,39.273-23.6a17.4,17.4,0,0,0-4.017-5.655,19.878,19.878,0,0,0-6.045-3.861A19.412,19.412,0,0,0,21.684-34.554ZM46.176-56.238v1.092H51.4V-1.092H46.176V0H66.144V-1.092H60.918V-56.238ZM70.044-33.462v1.092H75.27V-9.828q0,5.694,2.886,8.073T86.5.624a15.063,15.063,0,0,0,3.51-.429A13.154,13.154,0,0,0,93.4-1.131a12.372,12.372,0,0,0,2.847-2.184,8.371,8.371,0,0,0,1.872-3h.156V0h14.508V-1.092H107.64v-32.37H92.976v1.092h5.148v20.124a14.039,14.039,0,0,1-.585,4.056A11.126,11.126,0,0,1,95.9-4.8a8.212,8.212,0,0,1-2.535,2.3,6.421,6.421,0,0,1-3.276.858A4.342,4.342,0,0,1,85.956-3.7a10.069,10.069,0,0,1-1.17-5.031V-33.462Zm48.828,0v1.092h5.148V-1.092h-5.148V0h19.266V-1.092h-4.6V-20.124q0-1.95.117-3.315a14.7,14.7,0,0,1,.39-2.418,7.6,7.6,0,0,1,.741-1.872,12.446,12.446,0,0,1,1.092-1.6,7.015,7.015,0,0,1,5.46-2.73,4.731,4.731,0,0,1,3.276,1.365q1.482,1.365,1.482,4.8v24.8h-4.68V0h18.8V-1.092h-4.6V-24.1a7.547,7.547,0,0,1,.819-3.627,7.866,7.866,0,0,1,1.989-2.457,8.854,8.854,0,0,1,2.418-1.4,6.221,6.221,0,0,1,2.106-.468,4.526,4.526,0,0,1,4.017,1.755,8.823,8.823,0,0,1,1.209,5.031v24.18h-4.6V0h19.266V-1.092h-5.148V-22.386q0-1.4-.2-3.432a9.187,9.187,0,0,0-1.287-3.861,8.94,8.94,0,0,0-3.51-3.159,14.482,14.482,0,0,0-6.864-1.326,15.58,15.58,0,0,0-2.184.195,10.748,10.748,0,0,0-2.808.858,12.581,12.581,0,0,0-2.925,1.872,11.625,11.625,0,0,0-2.613,3.315q-.624-1.092-1.365-2.184a8.291,8.291,0,0,0-1.95-1.989,10.367,10.367,0,0,0-3.042-1.482,15.209,15.209,0,0,0-4.563-.585,12.338,12.338,0,0,0-4.407.7,12.6,12.6,0,0,0-3.12,1.677,10.23,10.23,0,0,0-2.067,2.028q-.78,1.053-1.248,1.833h-.156v-5.538Zm69.342,32.37V0h19.578V-1.092h-4.914V-17.784a22.23,22.23,0,0,1,.78-6.24,14.687,14.687,0,0,1,2.067-4.446,8.628,8.628,0,0,1,3-2.691,7.645,7.645,0,0,1,3.588-.9,4.517,4.517,0,0,1,3.588,1.521,7.192,7.192,0,0,1,1.326,4.8V-1.092h-4.836V0h19.578V-1.092h-5.226v-22A11.222,11.222,0,0,0,223.9-31.2q-2.847-2.964-7.995-2.964a14.269,14.269,0,0,0-5.85,1.053,13.645,13.645,0,0,0-3.822,2.457,11.556,11.556,0,0,0-2.262,2.847q-.78,1.443-1.092,2.145h-.156v-7.8H188.214v1.092h5.148V-1.092Z\"
                transform=\"translate(220 284)\" />
              <rect class=\"columnItem__Box js-columnBox\" id=\"長方形_148\" data-name=\"長方形 148\" width=\"179\" height=\"89\"
                transform=\"translate(24 223)\" fill=\"#fff\" />
              <path id=\"パス_587\" data-name=\"パス 587\"
                d=\"M300.249-232.156v-93.228h-7.312q-1.371,6.4-4.57,8t-9.6,1.6a50.245,50.245,0,0,1-14.624-2.742q-8.683-2.742-19.423-5.712t-23.307-5.712a127.5,127.5,0,0,0-27.191-2.742q-29.248,0-59.639,12.11a181.221,181.221,0,0,0-55.069,34.5,181.659,181.659,0,0,0-40.444,53.926q-15.767,31.533-15.767,70.378,0,35.646,14.167,66.265a174.989,174.989,0,0,0,37.7,53.241A176.415,176.415,0,0,0,129.788-6.626,165.119,165.119,0,0,0,194.225,6.4,149.411,149.411,0,0,0,222.1,3.885Q235.355,1.371,246.551-1.6t19.88-5.484A53.431,53.431,0,0,1,280.6-9.6q6.4,0,9.6,2.056T295.679,0h7.312V-96.884h-7.312a154.532,154.532,0,0,1-12.8,36.1A126.948,126.948,0,0,1,261.4-29.934,103.344,103.344,0,0,1,231.927-8.226Q215.247,0,194.682,0q-25.592,0-44.1-7.312T120.42-32.9q-11.654-18.28-17.138-49.356t-5.484-78.6q0-36.1,2.742-66.493t12.567-52.326q9.825-21.936,29.02-34.275T194.682-326.3q24.678,0,41.358,8.911a89.115,89.115,0,0,1,27.877,22.85,129.4,129.4,0,0,1,18.28,30.619q7.083,16.68,12.11,31.761Z\"
                transform=\"translate(105 424)\" />
            </g>
          </svg>

        </div>

        <articel class=\"columnList__item columnItem js-borderAnimation columnItem--hover columnItem--br\">
          <a href=\"{$this->posts[5]->guid}\" class=\"columnItem__link\">
            <h3 class=\"columnItem__title\">{$this->posts[5]->post_title}</h3>
            <p class=\"columnItem__excerpt\">
              {$this->posts[5]->post_excerpt}
            </p>
          </a>
        </articel>

        <articel class=\"columnList__item columnItem js-borderAnimation columnItem--hover columnItem--bl\">
          <a href=\"{$this->posts[6]->guid}\" class=\"columnItem__link\">
            <h3 class=\"columnItem__title\">{$this->posts[6]->post_title}</h3>
            <p class=\"columnItem__excerpt\">
              {$this->posts[6]->post_excerpt}
            </p>
          </a>
        </articel>

        <articel class=\"columnList__item columnItem js-borderAnimation columnItem--hover columnItem--br\">
          <a href=\"{$this->posts[7]->guid}\" class=\"columnItem__link\">
            <h3 class=\"columnItem__title\">{$this->posts[7]->post_title}</h3>
            <p class=\"columnItem__excerpt\">
              {$this->posts[7]->post_excerpt}
            </p>
          </a>
        </articel>

        <articel class=\"columnList__item columnItem js-borderAnimation columnItem--hover\">
          <a href=\"{$this->posts[8]->guid}\" class=\"columnItem__link\">
            <h3 class=\"columnItem__title\">{$this->posts[8]->post_title}</h3>
            <p class=\"columnItem__excerpt\">
              {$this->posts[8]->post_excerpt}
            </p>
          </a>
        </articel>

        <articel class=\"columnList__item columnItem js-borderAnimation columnItem--hover columnItem--bl\">
          <a href=\"{$this->posts[9]->guid}\" class=\"columnItem__link\">
            <h3 class=\"columnItem__title\">{$this->posts[9]->post_title}</h3>
            <p class=\"columnItem__excerpt\">
              {$this->posts[9]->post_excerpt}
            </p>
          </a>
        </articel>

        <div class=\"columnItem__border columnItem__border--01 js-borderAnimation\"></div>
        <div class=\"columnItem__border columnItem__border--02 js-borderAnimation\"></div>
        <div class=\"columnItem__border columnItem__border--03 js-borderAnimation\"></div>
        <div class=\"columnItem__border columnItem__border--04 js-borderAnimation\"></div>
      ";
  }
}