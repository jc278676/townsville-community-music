DROP TABLE "artists";
PRAGMA foreign_keys=OFF;
BEGIN TRANSACTION;

DROP TABLE "genres";
CREATE TABLE "genres" (genreId INTEGER PRIMARY KEY NOT null
    ,   genreText VARCHAR(40)
	);

INSERT INTO "genres" VALUES (1, 'A Capella');
INSERT INTO "genres" VALUES (2, 'Baroque');
INSERT INTO "genres" VALUES (3, 'Bluegrass');
INSERT INTO "genres" VALUES (4, 'Blues');
INSERT INTO "genres" VALUES (5, 'Both Kinds');
INSERT INTO "genres" VALUES (6, 'Celtic');
INSERT INTO "genres" VALUES (7, 'Chamber');
INSERT INTO "genres" VALUES (8, 'Choral');
INSERT INTO "genres" VALUES (9, 'Classical');
INSERT INTO "genres" VALUES (10, 'Classic Rock');
INSERT INTO "genres" VALUES (11, 'Country');
INSERT INTO "genres" VALUES (12, 'Electronic');
INSERT INTO "genres" VALUES (13, 'Ethnic Folk');
INSERT INTO "genres" VALUES (14, 'Flamenco');
INSERT INTO "genres" VALUES (15, 'Folk');
INSERT INTO "genres" VALUES (16, 'Jazz');
INSERT INTO "genres" VALUES (17, 'New Age');
INSERT INTO "genres" VALUES (18, 'Reggae');
INSERT INTO "genres" VALUES (19, 'Rock');
INSERT INTO "genres" VALUES (20, 'Rock & Roll');
INSERT INTO "genres" VALUES (21, 'Roots');
INSERT INTO "genres" VALUES (22, 'Showtunes');
INSERT INTO "genres" VALUES (23, 'Swing');
INSERT INTO "genres" VALUES (24, 'World Music');

DROP TABLE "artistGenres";
CREATE TABLE "artistGenres" (artistGenreId INTEGER PRIMARY KEY NOT NULL
    ,   artistId
    ,   genreId
    ,   FOREIGN KEY(artistId) REFERENCES artists(artistId)
    ,   FOREIGN KEY(genreId) REFERENCES genres(genreId)
);


CREATE TABLE "artists" (artistId INTEGER PRIMARY KEY NOT null
    ,   artistName VARCHAR(40)
    ,   artistGenreText VARCHAR(60)
    ,   artistUrl VARCHAR(80)
    ,   artistPhoto VARCHAR(40)
    ,   artistShortText VARCHAR(240)
    ,   artistText VARCHAR(4096)
	);

-- 
INSERT INTO "artists" VALUES(1
    ,   'Aviva Quartet'
    ,   'String Quartet/Chamber Music'
    ,   ''
    ,   'AVIVA-LANE500.jpg'
    ,   'This exciting foursome showcase a special blend of classical and modern chamber music.'
    ,   'Four talented musicians combine their skills in a variety of musical styles including fiery Rhumbas, Tangos, Serenades - a mixture of the most devine and swoon-worthy pieces, guaranteed to delight the senses.
The group features Caroline Lloyd-Doolan and Susan Fraser on Violin, Ivy Wu on Cello and Jessica Winton on viola.
Caroline is a well known performer both locally and regionally and Susan is also well known on the local music scene.  Ivy hails from Brisbane having completed her studies in France.  Jessica has come back to Townsville after completing her degree in Tasmania.
The girls all have a passion for chamber music and are very excited to be able to form up a group that will be able to perform regularly both locally and in the surrounding regions.  Their concert will take listeners through a wonderful journey of beautiful melodies and the most romantic music that is guaranteed to leave the senses fulfilled and wanting more.');

INSERT INTO artistGenres VALUES(NULL, 1, 2);
INSERT INTO artistGenres VALUES(NULL, 1, 3);
INSERT INTO artistGenres VALUES(NULL, 1, 6);
INSERT INTO artistGenres VALUES(NULL, 1, 9);

-- 
INSERT INTO "artists" VALUES(2
    ,   'Aquapella'
    ,   'Clasical Choral'
    ,   ''
    ,   'Aquapella01.jpg'
    ,   'A massed choir, some 50 strong, performing the world''s best choral music a capella.'
    ,   'Aquapella are 50 singers from the Townsville area bringing you a cappella world music at its very best: inspiring and uplifting harmonies from around the globe. A South African party song, a Hungarian love triangle, "The Lion Sleeps Tonight" in French - a sumptuous variety of different languages, stories, rhythms and moods to entertain and move you in the wonderful common language of music. Come along and travel the world by song!
Choir director Beat Lehmann was born in Switzerland where he first became involved in choir music by participating in classical productions like Handel''s Messiah, Mozart''s Mass in C minor etc. A study year abroad gave him the opportunity to sing with the Pontardullais Welsh Male Choir. After completing an M.A. in Social Anthropology he concentrated on his other passion, dance, directing a Modern Dance Company for several years. In 1986, Beat migrated to Australia where he completed a Ph.D. in Linguistics and involved himself in choir music again. For 12 years he conducted AkaBella, a well-known world music choir from Bellingen, NSW. AkaBella participated in major festivals like the National Folk Festival in Canberra, the Bellingen Global Carnival and theWoodford Folk Festival where they featured in the ABC documentary A Festival on Fire and launched their first CD ''Mosaic''. Beat moved to Magnetic Island in 2003 and has established a similarly successful world music choir for the Townsville area. Beat''s choirs focus on the rich musical heritage of cultures around the globe. A South African party song, a Hungarian love triangle, a Mexican lullaby, a French version of ''The Lion Sleeps Tonight'' to delve into the incredible variety and depth of a cappella world music and the cultures it represents, is not only fun, but a very enriching and uplifting experience.
Aquapella won the ABC Choir of the Year competition for Queensland in 2006.');

INSERT INTO artistGenres VALUES(NULL, 2, 1);
INSERT INTO artistGenres VALUES(NULL, 2, 9);
INSERT INTO artistGenres VALUES(NULL, 2, 24);
INSERT INTO artistGenres VALUES(NULL, 2, 17);
INSERT INTO artistGenres VALUES(NULL, 2, 13);


-- 
INSERT INTO "artists" VALUES(3
    ,   'The Camerata Singers'
    ,   'Contemporary and Classical Choral'
    ,   ''
    ,   'Camerata.jpg'
    ,   'A Choral ensemble with its roots in academic music study'
    ,   'The concept of the Camerata Singers originated in the 1980s when Susan Grinsell, who was teaching voice at James Cook University realised that ensemble singing was sadly lacking for tertiary music students. Since then, Susan, along with repetiteur Carol Dall''Osto, has strived to bring quality ensemble singing to the wider community by performing at events from the Ingham Italian Festival through to Cotter''s Markets in the mall.
The Camerata Singers comprises a group of trained singers, both male and female, from age 18 and over who strive to provide quality performances in a range of styles from classical through to A cappella and contemporary. A number of members also regularly participate in local music theatre and theatre productions.');

INSERT INTO artistGenres VALUES(NULL, 3, 1);
INSERT INTO artistGenres VALUES(NULL, 3, 9);
INSERT INTO artistGenres VALUES(NULL, 3, 17);


-- 
INSERT INTO "artists" VALUES(4
    ,   'Celtic Fyre'
    ,   'Traditional Celtic/Rock Fusion'
    ,   'http://www.celticfyre.com/'
    ,   'Celtic-Fyre-Wall-with-Fire8.jpg'
    ,   'Good times abound when these guys put on a show.'
    ,   'The alternative celtic rock band from North Queensland.
Typical audience response: - "WOW - I wasn''t prepared for that! Racing around the stage in kilts, blowing bagpipes, jumping from one instrument to the next, these guys know how to entertain!"
They will break your heart with the mournful and eerie sounds of the Great Highland Bagpipe and then crank it up real hard and rock you ''til you drop.
This 11 piece band is a fun-loving kick-em-in-the-pants band that just wants to rock - celtic style!');

INSERT INTO artistGenres VALUES(NULL, 4, 3);
INSERT INTO artistGenres VALUES(NULL, 4, 6);
INSERT INTO artistGenres VALUES(NULL, 4, 4);
INSERT INTO artistGenres VALUES(NULL, 4, 10);
INSERT INTO artistGenres VALUES(NULL, 4, 11);
INSERT INTO artistGenres VALUES(NULL, 4, 13);
INSERT INTO artistGenres VALUES(NULL, 4, 19);

-- 
INSERT INTO "artists" VALUES(5
    ,   'The Dirty Dozen'
    ,   'Classic Jazz/Rock/Blues'
    ,   'https://www.facebook.com/thedirtydozenband'
    ,   'DD600400.jpg'
    ,   'Classic Rock, Blues, and the occasional jazz number round out this band''s repertoire.'
    ,   'Townsville''s dynamic 12-piece Stage Band!
Jazz, rock, blues and modern top-40 songs featuring vocalists, trumpets, saxophones, trombone, drums, piano/keyboard and guitars.
Some titles from the repertoire   -   It Don''t Mean a Thing   -   Mustang Sally   -   Spinning Wheel   -   Moondance   -   In the Midnight Hour   -   Le Belleclaire Blues   -   Lady Madonna   -   Skyfall   -   Shake a Tail Feather   -   Soul Man   -   Peter Gunn   -   Minnie the Moocha   -   Sweet Home Chicago   -   R.E.S.P.E.C.T.   -   Everybody   -   Leave Your Hat On   -   Superstition   -   The Letter   -   Proud Mary   -   Knock on Wood   -   I Got You   -   ROCK in the USA   -   December 1963 (Oh What a Night!)   -   Don''t Know Why   -   Walkin'' on Sunshine');

INSERT INTO artistGenres VALUES(NULL, 5, 3);
INSERT INTO artistGenres VALUES(NULL, 5, 4);
INSERT INTO artistGenres VALUES(NULL, 5, 5);
INSERT INTO artistGenres VALUES(NULL, 5, 10);
INSERT INTO artistGenres VALUES(NULL, 5, 11);
INSERT INTO artistGenres VALUES(NULL, 5, 12);
INSERT INTO artistGenres VALUES(NULL, 5, 16);
INSERT INTO artistGenres VALUES(NULL, 5, 19);
INSERT INTO artistGenres VALUES(NULL, 5, 20);

-- 
INSERT INTO "artists" VALUES(6
    ,   'Harbourside Duo'
    ,   'Latin/Jazz/Celtic'
    ,   'www.davidrobertsguitar.com.au/Harbourside-Duo.html'
    ,   'Harbourside.jpg'
    ,   'Delightful pairing of classical guitar and violin.'
    ,   'Harbourside Duo is a new ensemble performing in Townsville and North Queensland featuring Monica Martin on Violin and David Roberts on Classical Guitar.
We perform a fine selection of music from Latin, Jazz, Celtic, Classical and popular styles.
Harbourside Duo is available for Corporate Functions, Weddings and private gatherings.');

INSERT INTO artistGenres VALUES(NULL, 6, 2);
INSERT INTO artistGenres VALUES(NULL, 6, 7);
INSERT INTO artistGenres VALUES(NULL, 6, 9);
INSERT INTO artistGenres VALUES(NULL, 6, 14);
INSERT INTO artistGenres VALUES(NULL, 6, 15);

-- 
INSERT INTO "artists" VALUES(7
    ,   'Poms From Oz'
    ,   'Contemporary/Traditional A Capella Vocals'
    ,   ''
    ,   'Poms.jpg'
    ,   'A tasty brew of Oz songs and Oz voices, with a dash of guitar and harmonica.'
    ,   'Poms from Oz are Judy, Kathleen and Alan Pomeroy, a family of solo vocalists from North Queensland, Australia. All are dinky di Oz with Judy and Kathy being descendents of First Fleeters.
Their tight harmony and vocal strength bring a fresh feel to original, contemporary and traditional works, uncovering a rich tapestry of songs gathered in their travels from around the world. Most songs are a cappella but sometimes accompanied by guitar and/or harmonica. Moods in their songs range from downright to real tear jerkers and audience participation is encouraged. Their sound is distinctive, as Judy arranges all the songs specifically for their voices.
A tasty brew of Oz songs and Oz voices, with a dash of guitar and harmonica. Open a nice bottle of red , sit back and enjoy.');

INSERT INTO artistGenres VALUES(NULL, 7, 1);
INSERT INTO artistGenres VALUES(NULL, 7, 3);
INSERT INTO artistGenres VALUES(NULL, 7, 15);
INSERT INTO artistGenres VALUES(NULL, 7, 17);

-- 
INSERT INTO "artists" VALUES(8
    ,   'Rosewood Guitar Quartet'
    ,   'Classical Guitar'
    ,   ''
    ,   'Rosewood01.jpg'
    ,   'Add some elegance to your next social event!'
    ,   'Add some elegance to your next social event!
Have the Rosewood Guitar Quartet provide that special atmosphere by playing for your guests
Sample CD available on request');

INSERT INTO artistGenres VALUES(NULL, 8, 2);
INSERT INTO artistGenres VALUES(NULL, 8, 7);
INSERT INTO artistGenres VALUES(NULL, 8, 9);
INSERT INTO artistGenres VALUES(NULL, 8, 14);
INSERT INTO artistGenres VALUES(NULL, 8, 15);
INSERT INTO artistGenres VALUES(NULL, 8, 17);

-- 
INSERT INTO "artists" VALUES(9
    ,   'Townsville Concert Band'
    ,   'Concert Band'
    ,   'https://www.facebook.com/TownsvilleConcertBand'
    ,   'TCBSaxLogo800.jpg'
    ,   'A local community band which plays music from musical theatre through to classical and modern'
    ,   'The Townsville Concert Band are currently looking for musician members.
This is a local community band who meet once a week for rehearsals, and who play gigs around town throughout the year. The band plays a range of different styles of concert band music, ranging from classical to musical theatre and modern.
All levels and ages are welcome.');

INSERT INTO artistGenres VALUES(NULL, 9, 2);
INSERT INTO artistGenres VALUES(NULL, 9, 9);
INSERT INTO artistGenres VALUES(NULL, 9, 10);
INSERT INTO artistGenres VALUES(NULL, 9, 16);
INSERT INTO artistGenres VALUES(NULL, 9, 22);
INSERT INTO artistGenres VALUES(NULL, 9, 23);

-- 
INSERT INTO "artists" VALUES(10
    ,   'Wassa'
    ,   'African Percussion'
    ,   'http://www.therhythmconnection.com/wassa.html'
    ,   'Wassa01.jpg'
    ,   'Traditional African rhythms on traditional African instruments.'
    ,   'Wassa is a six-piece percussion group performing traditional rhythms from West Africa on traditional instruments. The Townsville based group has been performing throughout North Queensland and as far as Papua New Guinea since 2001.');

INSERT INTO artistGenres VALUES(NULL, 10, 13);
INSERT INTO artistGenres VALUES(NULL, 10, 17);
INSERT INTO artistGenres VALUES(NULL, 10, 18);
INSERT INTO artistGenres VALUES(NULL, 10, 21);
INSERT INTO artistGenres VALUES(NULL, 10, 24);

-- 
INSERT INTO "artists" VALUES(11
    ,   'Stokes Nicholson Big Band'
    ,   'Big Band Jazz/Swing'
    ,   ''
    ,   'SNBB1.jpg'
    ,   'A Jazz/Swing big band fostering development of talent in music students.'
    ,   'The Stokes Nicholson Big Band was formed in 1991 through collaboration between the late Roy Stokes and Les Nicholson. Each man had his own individual reasons for wanting a Big Band, perhaps influenced by the difference in their ages with Roy being 17 years older than Les. Roy wanted to create an opportunity to keep experienced musicians playing challenging music so their talents didn''t go rusty. Les came from a different perspective and wanted to provide an opportunity for music students of all ages to sit beside experienced jazz musicians to absorb the musical synergy that classroom teaching alone cannot develop.
A number of experienced musicians were invited to join the various sections of the new Big Band with most sections being led by a member of Les'' already well-established Pacific Mainstream Jazz Band. The original Principals were Roy Stokes (not a member of PMJB), saxophone; Les Nicholson, trumpet; Neville Minon, trombone; and Bob Hebden, rhythm. Roy, Neville and Peter Alloway were all still private music teachers at this time and some of their pupils were the first students to be part of this adventure.
The Stokes Nicholson Big Band was up and running, meeting once a month for rehearsals with an expectation that each section would practise individually or as a group in between these rehearsals.
Sadly Roy passed away on 1st January 1993 after a period of illness. Les continued to manage the band and conduct rehearsals, as well as playing first trumpet. In 1997 he enlisted the help of John Ruffle who took on the role of Musical Director, allowing Les to relax a little and enjoy his playing more. Roy would no doubt be very proud to see how much his beloved Big Band has developed since its formation as it is now a very accomplished band with a diverse repertoire and the technical expertise capable of backing great Jazz singers.
The band today demonstrates it has achieved the aims of both Roy and Les with experienced musicians arriving in town and feeling very proud to join such a powerful big band. A number of the original student members from 1991 are still in the band and have now joined the ranks of the experienced musicians and new students are still progressing from school bands to the Stokes Nicholson Big Band.');

INSERT INTO artistGenres VALUES(NULL, 11, 16);
INSERT INTO artistGenres VALUES(NULL, 11, 20);
INSERT INTO artistGenres VALUES(NULL, 11, 22);
INSERT INTO artistGenres VALUES(NULL, 11, 23);

--
DROP TABLE "members";
CREATE TABLE "members" (memberId INTEGER PRIMARY KEY NOT NULL
    -- personClass is a value of 1, 2, or 3 for the different classes of membership 
    -- 1 for the administrator, 2 for a paid member, 3 for a registered, but unpaid member
    ,   memberClass INTEGER
    ,   memberFname VARCHAR(20)    
    ,   memberLname VARCHAR(30)
    ,   memberPhone1 VARCHAR(14)
    ,   memberPhone2 VARCHAR(14)
    ,   memberPhone3 VARCHAR(14)
    ,   memberAddressLine1 VARCHAR(80)
    ,   memberAddressLine2 VARCHAR(80)
    ,   memberAddressSuburb VARCHAR(30)
    ,   memberAddressState VARCHAR(3)
    ,   memberAddressPostcode VARCHAR(4)
    ,   memberEmail VARCHAR(50)
    ,   memberPasswd VARCHAR(40)  -- a 1-way hash created by php's crypt mechanism
    ,   artistId                  -- may be NULL if the member is not (associated with) a registered artist
    ,   FOREIGN KEY(artistId) REFERENCES artists(artistId)
);

-- 
INSERT INTO "members" VALUES(1
    ,   1
    ,   'System'
    ,   'Administrator'
    ,   ''
    ,   ''
    ,   ''
    ,   ''
    ,   ''
    ,   ''
    ,   ''
    ,   ''
    ,   ''
    ,   ''
    ,   NULL
);

-- 
INSERT INTO "members" VALUES(2
    ,   2
    ,   'Caroline'
    ,   'Lloyd-Doolan'
    ,   '0402 255 125'
    ,   '0402 255 125'
    ,   ''
    ,   ''
    ,   ''
    ,   ''
    ,   ''
    ,   ''
    ,   ''
    ,   ''
    ,   '1'
);

-- 
INSERT INTO "members" VALUES(3
    ,   2
    ,   'Beat'
    ,   'Lehmann'
    ,   ''
    ,   ''
    ,   ''
    ,   ''
    ,   ''
    ,   ''
    ,   ''
    ,   ''
    ,   'beat.lehmann@iprimus.com.au'
    ,   ''
    ,   '2'
);

-- 
INSERT INTO "members" VALUES(4
    ,   2
    ,   'Andi'
    ,   'Hodgson'
    ,   '0421 072 625'
    ,   '0421 072 625'
    ,   ''
    ,   ''
    ,   ''
    ,   ''
    ,   ''
    ,   ''
    ,   ''
    ,   ''
    ,   '5'
);

-- 
INSERT INTO "members" VALUES(5
    ,   3
    ,   'Joanne'
    ,   'McCluskey'
    ,   '0427 255 125'
    ,   '0427 255 125'
    ,   ''
    ,   ''
    ,   ''
    ,   ''
    ,   ''
    ,   ''
    ,   'joannemmccluskey@gmail.com'
    ,   ''
    ,   '8'
);

-- 
INSERT INTO "members" VALUES(6
    ,   3
    ,   'Les'
    ,   'Nicholson'
    ,   ''
    ,   ''
    ,   ''
    ,   ''
    ,   ''
    ,   ''
    ,   ''
    ,   ''
    ,   'mlg7@optusnet.com.au'
    ,   ''
    ,   '11'
);
--


--
DROP TABLE "events";
CREATE TABLE "events" (eventId INTEGER PRIMARY KEY NOT NULL
    ,   eventTitle VARCHAR(50)
    ,   eventDateTime VARCHAR(16) -- stored as YYYY-mm-dd HH:MM 
    ,   eventVenue VARCHAR(40)    -- 
    ,   eventPromoPhoto VARCHAR(40)
    ,   eventPatronBaseId  INTEGER  --  This is used to generate the link to the ticketsales website in
-- this format https://au.patronbase.com/_TVCC/Seats/NumSeats?prod_id=0782&perf_id=1&section_id=M&seat_type_id=S
    ,   eventShortText VARCHAR(240)
    ,   eventText VARCHAR(4096) -- every entry seems to be formatted vastly differently
                                -- perhaps allow valid html code here? Wrapped in a div?
    ,   memberId NOT NULL	-- the member that lodged this event record (1 is the sysadmin)
    ,   artistId 		-- may be NULL if event performer is not in artists table
    ,   FOREIGN KEY(memberId) REFERENCES members(memberId)
    ,   FOREIGN KEY(artistId) REFERENCES artists(artistId)
);


INSERT INTO "events" VALUES(NULL
    ,   'AVIVA and Friends Go Abroad!'
    ,   '2015-06-14 14:00' --Automatically expires after this date
    ,   'C2 (Townsville Civic Centre)'
    ,   'AvivanF500.jpg'
    ,   '0782'                 -- This event is not ticketed through PatronBase
    ,   'A musical world tour'
    ,   'Grab your passport and travel with us to the Celtic Highlands and then step into the Bluegrass country in the heart of America!
Join us for a toe tappin'', soul searchin'' journey as AVIVA makes it''s way around the world on the first of our two globe trotting adventures!

featuring
Caroline Lloyd-Doolan on violin
Susan Fraser on violin
Rebecca Brown on viola
Carol Radovanovic on cello
Paul Neilson on percussion '
    ,   1
    ,   1
);

INSERT INTO "events" VALUES(NULL
    ,   'SUNDAY VARIETY CONCERT'
    ,   '2015-06-21 14:00' --Automatically expires after this date
    ,   'Pimlico Performing Arts Centre'
    ,   'FOTT.png'
    ,   ''                 -- This event is not ticketed through PatronBase
    ,   'Our Regularly Scheduled Sunday Show'
    ,   '2pm Sunday 21 June at Pimlico Performing Arts Centre
Fulham Road
Enquiries - please phone 4723 7879 '
    ,   1
    ,   1
);

INSERT INTO "events" VALUES(NULL
    ,   'Die Frankfurter Oompah Band'
    ,   '2015-05-31 14:00' --Automatically expires after this date
    ,   'C2  (Townsville Civic Centre)'
    ,   'Oompahlogo600.png'
    ,   '0831'                 -- This event is not ticketed through PatronBase
    ,   'presenting a Taste of Bavaria'
    ,   'Traditional Bavarian Music from the Egerlaendeer Musikanten and Bavarian Composers,
performed in true Oktoberfest style. '
    ,   1
    ,   1
);

INSERT INTO "events" VALUES(NULL
    ,   'TOWNSVILLE CONCERT BAND'
    ,   '2015-06-28 14:00' --Automatically expires after this date
    ,   'C2  (Townsville Civic Centre)'
    ,   'TCBlogo200.jpg'
    ,   ''                 -- This event is not ticketed through PatronBase
    ,   'Quarterly Performance'
    ,   ''
    ,   1
    ,   1
);

INSERT INTO "events" VALUES(NULL
    ,   'TOWNSVILLE CONCERT BAND'
    ,   '2015-09-27 14:00' --Automatically expires after this date
    ,   'C2  (Townsville Civic Centre)'
    ,   'TCBlogo200.jpg'
    ,   ''                 -- This event is not ticketed through PatronBase
    ,   'Quarterly Performance'
    ,   ''
    ,   1
    ,   1
);


INSERT INTO "events" VALUES(NULL
    ,   'AVIVA STRING QUARTET'
    ,   '2015-11-29 14:00' --Automatically expires after this date
    ,   'C2  (Townsville Civic Centre)'
    ,   'AVIVA-LANE500.jpg'
    ,   ''                 -- This event is not ticketed through PatronBase
    ,   'Last chance to see them this year'
    ,   '
The superb foursome return with their final concert for 2015, bringing their signature style of classical and modern music to the masses in their own fresh and entertaining style.

featuring
Caroline Lloyd-Doolan on violin
Susan Fraser on violin
Jessica Winton on viola
Ivy Wu on cello '
    ,   1
    ,   1
);
--
DROP TABLE "bulletins";
CREATE TABLE "bulletins" (bulletinId INTEGER PRIMARY KEY NOT NULL
    ,   bulletinType INTEGER -- 1 for an announcement, 2 for for sale / wanted to buy
    ,   bulletinTitle VARCHAR(50)
    ,   bulletinExpiryDate VARCHAR(10)  -- Automatically set with date('now', '+2 months') when inserted 
    ,   bulletinImage VARCHAR(40)
    ,   bulletinText VARCHAR(4096)
    ,   memberId NOT NULL	-- the member that lodged this bulletin record
    ,   FOREIGN KEY(memberId) REFERENCES members(memberId)
);

INSERT INTO "bulletins" VALUES(93
    ,   2
    ,   'Chord Organ Wanted'
    ,   '2015-06-03'
    ,   'Chord Organ.jpg'
    ,   'I am after a Chord Organ like the one in the attached photo. This is identical to the one I learnt on as a young girl some 40 odd years ago, and my father bought me one for me 10th birthday.
Sadly this treasured organ finally gave up the ghost some 10 years past and I would dearly love to be able to find another to takes its place, my home just doesn’t seem the same without it.

Any help would be greatly appreciated.
Caroline Kane
phone 4776 4760 during office hours'
    ,   '1'
);

INSERT INTO "bulletins" VALUES(NULL
    ,   2
    ,   'Rouvas Academy of Singing'
    ,   '2015-06-17'
    ,   'JohnRouvas01.jpg'
    ,   'I have been in the music industry in Sydney for over 30 years in the capacity of singing teacher, stage performer, singer and musician. My daughter Diana Rouvas was a finalist in the 2012 “The Voice” television show and she is a testament to what can be achieved with correct vocal training. Allow me to show you her technique and give yourself the opportunity to excel as a vocalist. Skype lessons also available 
Visit rouvasacademyofsinging.com.au
or phone John 0404 044 823'
    ,   '1'
);

INSERT INTO "bulletins" VALUES(NULL
    ,   2
    ,   'Volunteer Singers/Musicians'
    ,   '2015-09-24'
    ,   'StJosephs.png'
    ,   'Our Parish Priest, Fr Mick Peters, is trying to development and foster a community for our 6 PM Vigil Mass at St Josephs on the Strand.
I''m helping by organising an event format, where I invite our members to bring a plate for a buffet and I provide music, or friends who can sing or perform.
Now that we are achieving some success, we need more people who can sing or play music.
I''m open to any kind of singing or performing so long as it is not too controversial. My preference would be for an artist to sing a medley of old time favorites.
Mass starts at 6pm and finishes about 10 to 7.

If you would like to take part, please call Merle Trembath 0418882633 anytime'
    ,   '1'
);

COMMIT;

