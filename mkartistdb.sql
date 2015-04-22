DROP TABLE "people";
PRAGMA foreign_keys=OFF;
BEGIN TRANSACTION;
CREATE TABLE "people" (
	id INTEGER PRIMARY KEY NOT NULL, 
	name VARCHAR(40), 
	genre VARCHAR(20),
	filename VARCHAR(20)
	);
INSERT INTO "people" VALUES(NULL, 'Aviva Quartet','String Quartet', 'AVIVA_LANE500.jpg');

INSERT INTO "people" VALUES(NULL, 'Aquapella', 'A capella choir', 'Aquapella01.jpg');

INSERT INTO "people" VALUES(NULL ,'The Camerata Singers', 'Vocal choir', 'Camerata.jpg');

INSERT INTO "people" VALUES(NULL ,'The Dirty Dozen', 'Modern Jazz/Rock/Blues', 'DD600400.jpg');

INSERT INTO "people" VALUES(NULL ,'Celtic Fyre', 'Celtic Rock', '');

INSERT INTO "people" VALUES(NULL ,'Harbourside Duo', 'Latin/Jazz/Celtic/Classical', 'Harbourside.jpg');

INSERT INTO "people" VALUES(NULL ,'Poms from Oz', 'A capella trio', 'Poms.jpg');

INSERT INTO "people" VALUES(NULL ,'Rosewood Guitar Quartet', 'Classical guitar', 'Rosewood.jpg');

INSERT INTO "people" VALUES(NULL ,'Stokes Nicholson Big Band', 'Big Band / Swing', 'SNBB.jpg');

INSERT INTO "people" VALUES(NULL ,'Wassa', 'West African Percussion', 'Wassa.jpg');

INSERT INTO "people" VALUES(NULL ,'Townsville Concert Band', 'Concert Band', 'TCBSaxLogo.jpg');


--INSERT INTO "Artists" VALUES(NULL , '', '', '');
--INSERT INTO "Artists" VALUES(NULL , '', '', '');
--INSERT INTO "Artists" VALUES(NULL , '', '', '');
--INSERT INTO "Artists" VALUES(NULL , '', '', '');
--INSERT INTO "Artists" VALUES(NULL , '', '', '');






COMMIT;

