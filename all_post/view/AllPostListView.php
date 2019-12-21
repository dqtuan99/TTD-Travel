<?php

namespace all_post\view;

class AllPostListView {
  private $data;
  private $page_num;
  private $current_page;
  private $categories;

  public function __construct($data, $page_num, $current_page, $categories) {
    $this->data = $data;
    $this->page_num = $page_num;
    $this->current_page = $current_page;
    $this->categories = $categories;
  }

  public function constructWithDate($data, $page_num, $current_page, $year, $month){
    $this->data = $data;
    $this->page_num = $page_num;
    $this->current_page = $current_page;
    $this->year = $year;
    $this->month = $month;
  }

  public function postByPageView() {
    $html = "";
    if ($this->data == null) {
      return "Sorry, no post available yet.";
    }
    foreach ($this->data as $row){
      $string = $row["text"];
      $string = (strlen($string) > 500) ? substr($string, 0, 490).'...' : $string;
      $html .= '
      <li>
        <div class="postcontent">
          <div class="image-container">
            <img src="'.$row["thumbnail_img"].'" href="#detailPostModal'.$row["post_id"].'" data-toggle="modal">
          </div>
          <div class="text-container">
            <h2 class="post-title hvr-animation-blue" href="#detailPostModal'.$row["post_id"].'" data-toggle="modal">'.$row["title"].'</h2>
            <br>
            <div class="datetime-location">
              <footer class="blockquote-footer">
                <span>'.$row["publish_date"].'</span>
                <span class="location hvr-animation-blue">'.$row["city"].'</span>
                <span> · Published by </span>
                <span class="username hvr-animation-blue">@tuank62ie1</span>
              </footer>
            </div>
            <p class="post-content">'.$string.'</p>
            <p class="read-more hvr-animation-blue" href="#detailPostModal'.$row["post_id"].'" data-toggle="modal">Continue reading ></p>
          </div>
        </div>
      </li>
      <hr class="horizontal-line">
      ';
    }

    $html .= '
    <div class="text-center">
      <div class="pagination">
        <a href="?categories='.$this->categories.'&&p='.($this->current_page>0 ? $this->current_page : $this->current_page+1).'">&laquo;</a>';
        for ($i = 0; $i < $this->page_num; ++$i){
          if ($i != $this->current_page){
            $html .= '
            <a href="?categories='.$this->categories.'&&p='.($i+1).'">'.($i+1).'</a>
            ';
          }
          else {
            $html .= '
            <a class="active" href="#">'.($i+1).'</a>
            ';
          }
        }
        $html .= '
        <a href="?categories='.$this->categories.'&&p='.($this->current_page+1<$this->page_num ? $this->current_page+2 : $this->current_page+1).'">&raquo;</a>
      </div>
    </div>
    ';

    return $html;
  }


}

?>
