DROP TABLE 'artists';
PRAGMA foreign_keys=OFF;
BEGIN TRANSACTION;
CREATE TABLE 'artists' (
	id INTEGER PRIMARY KEY NOT NULL, 
	name VARCHAR(40), 
	genre VARCHAR(60),
	fileName VARCHAR(60)
	);
INSERT INTO "artists" VALUES(NULL, 'Aviva Quartet','String Quartet', 'AVIVA_LANE500.jpg');

INSERT INTO "artists" VALUES(NULL, 'Aquapella', 'A capella choir', 'Aquapella01.jpg');

INSERT INTO "artists" VALUES(NULL ,'The Camerata Singers', 'Vocal choir', 'Camerata.jpg');

INSERT INTO "artists" VALUES(NULL ,'The Dirty Dozen', 'Modern Jazz/Rock/Blues', 'DD600400.jpg');

INSERT INTO "artists" VALUES(NULL ,'Celtic Fyre', 'Celtic Rock', 'Celtic-Fyre-Wall-with-Fire8.jpg');

INSERT INTO "artists" VALUES(NULL ,'Harbourside Duo', 'Latin/Jazz/Celtic/Classical', 'Harbourside.jpg');

INSERT INTO "artists" VALUES(NULL ,'Poms from Oz', 'A capella trio', 'Poms.jpg');

INSERT INTO "artists" VALUES(NULL ,'Rosewood Guitar Quartet', 'Classical guitar', 'Rosewood.jpg');

INSERT INTO "artists" VALUES(NULL ,'Stokes Nicholson Big Band', 'Big Band / Swing', 'SNBB.jpg');

INSERT INTO "artists" VALUES(NULL ,'Wassa', 'West African Percussion', 'Wassa.jpg');

INSERT INTO "artists" VALUES(NULL ,'Townsville Concert Band', 'Concert Band', 'TCBSaxLogo.jpg');


--INSERT INTO "artists" VALUES(NULL , '', '', '');
--INSERT INTO "artists" VALUES(NULL , '', '', '');
--INSERT INTO "artists" VALUES(NULL , '', '', '');
--INSERT INTO "artists" VALUES(NULL , '', '', '');
--INSERT INTO "artists" VALUES(NULL , '', '', '');






COMMIT;

