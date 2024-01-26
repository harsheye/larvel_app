.pagination {   
    display: flex;
    justify-content: center;
    list-style: none;
    padding: 0.1rem;
    margin: 0; /* Remove margin between pagination links */
    font-size: 14px;
    font-weight: bold;
    overflow:hidden;
}

.pagination > li {
    margin: 0; /* Remove margin between pagination links */
    border-radius: 20px; /* Make the boxes rounder */
}

.pagination > li > span,
.pagination > li > a {
    color: blue;
    background-color: rgba(255,255,255,1);
    border: 1px solid rgb(73,80,87);
    padding: 15px 20px; /* Adjust padding for larger buttons */
    font-size: 16px
    text-decoration: none;
    border-radius: 0.5rem; /* Make the boxes rounder */
    transition: background-color 0.3s, color 0.3s;
    position: relative;
}

.pagination > li > span,
.pagination > li > a:hover {
    background-color: rgba(0,0,0, 0.3); /* Black background with opacity on hover */
    border: 1px solid rgb(73,80,87);
    
}

.pagination > li.active > span,
.pagination > li.active > a {
    background-color: blue; /* Black background for active button */
    color: #fff;
}