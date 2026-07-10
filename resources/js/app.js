import Navbar from './Navbar.js';
import initBannerSwiper from './BannerSwiper.js';
import DayUpdated from './DayUpdated.js';
import AddCover from './AddCover.js';
import BrowseFilter from './BrowseFilter.js';
import ChapterNavbar from './ChapterNavbar.js';
import SelectLanguage from './SelectLanguage.js';
import SelectGenre from './SelectGenre.js';
import AddChapterPanel from './AddChapterPanel.js';
import ForumFilter from './ForumFilter.js';
import LikeDislikedComment from './LikeDislikedComment.js';
import LangSwitch from './LangSwith.js';

document.addEventListener('DOMContentLoaded', () => {
    console.log("DOM Loaded");

    Navbar();
    console.log("Navbar OK");

    initBannerSwiper();
    console.log("Banner OK");

    DayUpdated();
    console.log("DayUpdated OK");

    AddCover();
    console.log("AddCover OK");

    BrowseFilter();
    console.log("BrowseFilter OK");
    
    ChapterNavbar();
    console.log("ChapterNavbar OK");

    SelectLanguage();
    console.log("SelectLanguage OK");

    SelectGenre();
    console.log("SelectGenre OK");

    AddChapterPanel();
    console.log("AddChapterPanel OK");

    ForumFilter();
    console.log("ForumFilter OK");

    LikeDislikedComment();
    console.log("LikeDislikedComment ok")

    LangSwitch();
    console.log('LangSwitch ok')
});
