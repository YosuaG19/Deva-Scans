import Navbar from './Navbar.js';
import initBannerSwiper from './BannerSwiper.js';
import DayUpdated from './DayUpdated.js';
import AddCover from './AddCover.js';
import BrowseFilter from './BrowseFilter.js';
import ChapterNavbar from './ChapterNavbar.js';
import SelectGenre from './SelectGenre.js';
import AddChapterPanel from './AddChapterPanel.js';
import ForumFilter from './ForumFilter.js';
import LikeDislikedComment from './LikeDislikedComment.js';
import LangSwitch from './LangSwith.js';
import MobileFilter from './MobileFilter.js';
import ChapterListPanel from './ChapterListPanel.js';
import PageOrientation from './PageOrientation.js';
import PageOrientationPanel from './PageOrientationPanel.js';
import ProfilePicSelection from './ProfilePicSelection.js';
import CommentCharCounter from './CommentCharCounter.js';
import ReactionSelection from './ReactionSelection.js';
import CommentForm from './CommentForm.js';
import RatingPanel from './RatingPanel.js';
import RatingSelection from './RatingSelection.js';
import ReadMore from './ReadMore.js';
import Selectday from './SelectDay.js';

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

    Selectday();
    console.log("Selectday OK");

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

    MobileFilter();
    console.log('MobileFilter ok')

    ReadMore();
    console.log('ReadMore ok');

    ChapterListPanel();
    console.log('ChapterListPanel ok')

    PageOrientationPanel();
    console.log('PageOrientationPanel ok')
    
    PageOrientation();
    console.log('PageOrientation ok');
    
    CommentForm();
    console.log('CommentForm ok');
    
    CommentCharCounter();
    console.log('CommentCharCounter ok');

    ProfilePicSelection();
    console.log('ProfilePicSelection ok');

    ReactionSelection();
    console.log('ReactionSelection ok');

    RatingPanel();
    console.log('RatingPanel ok');

    RatingSelection()
    console.log('RatingSelection ok');
});
