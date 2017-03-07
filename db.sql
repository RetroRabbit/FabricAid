-- Created by Vertabelo (http://vertabelo.com)
-- Last modification date: 2017-03-02 13:18:01.0

-- tables
-- Table: Access
CREATE TABLE Access (
    Id int NOT NULL,
    Code varchar(255) NOT NULL,
    Name varchar(255) NOT NULL,
    CONSTRAINT Access_pk PRIMARY KEY (Id)
);

-- Table: Area
CREATE TABLE Area (
    Id int NOT NULL,
    Code varchar(255) NOT NULL,
    Name varchar(255) NOT NULL,
    Location varchar(255) NULL,
    CompanyId int NOT NULL,
    CONSTRAINT Area_pk PRIMARY KEY (Id)
);

-- Table: ArtisanType
CREATE TABLE ArtisanType (
    Id int NOT NULL,
    Name varchar(255) NOT NULL,
    CONSTRAINT ArtisanType_pk PRIMARY KEY (Id)
);

-- Table: Category
CREATE TABLE Category (
    Id int NOT NULL,
    Code varchar(255) NOT NULL,
    Name varchar(255) NOT NULL,
    CONSTRAINT Category_pk PRIMARY KEY (Id)
);

-- Table: Company
CREATE TABLE Company (
    Id int NOT NULL,
    Code varchar(255) NOT NULL,
    Name varchar(255) NOT NULL,
    Description text NULL,
    Logo nvarchar(max) NULL,
    Active bool NOT NULL DEFAULT '0',
    CONSTRAINT Company_pk PRIMARY KEY (Id)
);

-- Table: FocusArea
CREATE TABLE FocusArea (
    Id int NOT NULL,
    Code varchar(255) NOT NULL,
    Name varchar(255) NOT NULL,
    CONSTRAINT FocusArea_pk PRIMARY KEY (Id)
);

-- Table: Job
CREATE TABLE Job (
    Id int NOT NULL,
    Priority int NOT NULL,
    DateCreated date NOT NULL,
    PlannedStartDate date NOT NULL,
    PlannedCompletionDate date NOT NULL,
    PlannedHours int NOT NULL,
    EstimatedCost decimal(6,2) NOT NULL DEFAULT '0.00',
    Comments text NOT NULL,
    ActualHours int NOT NULL,
    ActualCost decimal(6,2) NOT NULL,
    JobDetails varchar(max) NOT NULL,
    TooltId int NOT NULL,
    MachineId int NOT NULL,
    AreaId int NOT NULL,
    CreatedBy int NOT NULL,
    AssignedBy int NOT NULL,
    AssignedTo int NOT NULL,
    CategoryId int NOT NULL,
    TypeId int NOT NULL,
    TemplateId int NOT NULL,
    FocusAreaId int NOT NULL,
    StatusId int NOT NULL,
    CompanyId int NOT NULL,
    CONSTRAINT Job_pk PRIMARY KEY (Id)
);

-- Table: Machine
CREATE TABLE Machine (
    Id int NOT NULL,
    Code varchar(255) NOT NULL,
    Name varchar(255) NOT NULL AUTO_INCREMENT,
    AreaId int NOT NULL,
    CONSTRAINT Machine_pk PRIMARY KEY (Id)
);

-- Table: Role
CREATE TABLE Role (
    Id int NOT NULL,
    Name varchar(255) NOT NULL,
    CONSTRAINT Role_pk PRIMARY KEY (Id)
);

-- Table: RoleAccess
CREATE TABLE RoleAccess (
    Id int NOT NULL,
    RoleId int NOT NULL,
    AccessId int NOT NULL,
    CONSTRAINT RoleAccess_pk PRIMARY KEY (Id)
);

-- Table: Status
CREATE TABLE Status (
    Id int NOT NULL,
    Code varchar(255) NOT NULL,
    Name varchar(255) NOT NULL,
    CONSTRAINT JobStatus_pk PRIMARY KEY (Id)
);

-- Table: Template
CREATE TABLE Template (
    Id int NOT NULL,
    Code varchar(255) NOT NULL,
    Name varchar(255) NOT NULL,
    Details text NOT NULL,
    Active bool NOT NULL,
    CompanyId int NOT NULL,
    CONSTRAINT Template_pk PRIMARY KEY (Id)
);

-- Table: Tool
CREATE TABLE Tool (
    Id int NOT NULL,
    Code varchar(255) NOT NULL,
    Name varchar(255) NOT NULL,
    Description text NULL,
    MachineId int NOT NULL,
    CONSTRAINT Component_pk PRIMARY KEY (Id)
);

-- Table: Type
CREATE TABLE Type (
    Id int NOT NULL,
    Code varchar(255) NOT NULL,
    Name varchar(255) NOT NULL,
    CONSTRAINT Type_pk PRIMARY KEY (Id)
);

-- Table: User
CREATE TABLE User (
    Id int NOT NULL,
    FirstName varchar(255) NOT NULL,
    LastName varchar(255) NOT NULL,
    Email varchar(255) NOT NULL,
    Pasword varchar(255) NOT NULL,
    Confirmed bool NOT NULL,
    DateCreated date NOT NULL,
    Active bool NOT NULL DEFAULT '0',
    RoleId int NOT NULL,
    ArtisanTypeId int NOT NULL,
    CompanyId int NOT NULL,
    UNIQUE INDEX AK_0 (Email),
    CONSTRAINT User_pk PRIMARY KEY (Id)
);

-- foreign keys
-- Reference: Company_Area (table: Area)
ALTER TABLE Area ADD CONSTRAINT Company_Area FOREIGN KEY Company_Area (CompanyId)
    REFERENCES Company (Id);

-- Reference: Component_fk1 (table: Tool)
ALTER TABLE Tool ADD CONSTRAINT Component_fk1 FOREIGN KEY Component_fk1 (MachineId)
    REFERENCES Machine (Id);

-- Reference: JobTemplate_Company (table: Template)
ALTER TABLE Template ADD CONSTRAINT JobTemplate_Company FOREIGN KEY JobTemplate_Company (CompanyId)
    REFERENCES Company (Id);

-- Reference: Job_Company (table: Job)
ALTER TABLE Job ADD CONSTRAINT Job_Company FOREIGN KEY Job_Company (CompanyId)
    REFERENCES Company (Id);

-- Reference: Job_FocusArea (table: Job)
ALTER TABLE Job ADD CONSTRAINT Job_FocusArea FOREIGN KEY Job_FocusArea (FocusAreaId)
    REFERENCES FocusArea (Id);

-- Reference: Job_JobCategory (table: Job)
ALTER TABLE Job ADD CONSTRAINT Job_JobCategory FOREIGN KEY Job_JobCategory (CategoryId)
    REFERENCES Category (Id);

-- Reference: Job_JobTemplate (table: Job)
ALTER TABLE Job ADD CONSTRAINT Job_JobTemplate FOREIGN KEY Job_JobTemplate (TemplateId)
    REFERENCES Template (Id);

-- Reference: Job_JobType (table: Job)
ALTER TABLE Job ADD CONSTRAINT Job_JobType FOREIGN KEY Job_JobType (TypeId)
    REFERENCES Type (Id);

-- Reference: Job_Status (table: Job)
ALTER TABLE Job ADD CONSTRAINT Job_Status FOREIGN KEY Job_Status (StatusId)
    REFERENCES Status (Id);

-- Reference: Job_fk0 (table: Job)
ALTER TABLE Job ADD CONSTRAINT Job_fk0 FOREIGN KEY Job_fk0 (AssignedBy)
    REFERENCES User (Id);

-- Reference: Job_fk1 (table: Job)
ALTER TABLE Job ADD CONSTRAINT Job_fk1 FOREIGN KEY Job_fk1 (CreatedBy)
    REFERENCES User (Id);

-- Reference: Job_fk2 (table: Job)
ALTER TABLE Job ADD CONSTRAINT Job_fk2 FOREIGN KEY Job_fk2 (AssignedTo)
    REFERENCES User (Id);

-- Reference: Job_fk5 (table: Job)
ALTER TABLE Job ADD CONSTRAINT Job_fk5 FOREIGN KEY Job_fk5 (AreaId)
    REFERENCES Area (Id);

-- Reference: Job_fk7 (table: Job)
ALTER TABLE Job ADD CONSTRAINT Job_fk7 FOREIGN KEY Job_fk7 (TooltId)
    REFERENCES Tool (Id);

-- Reference: Machine_Job (table: Job)
ALTER TABLE Job ADD CONSTRAINT Machine_Job FOREIGN KEY Machine_Job (MachineId)
    REFERENCES Machine (Id);

-- Reference: Machine_fk0 (table: Machine)
ALTER TABLE Machine ADD CONSTRAINT Machine_fk0 FOREIGN KEY Machine_fk0 (AreaId)
    REFERENCES Area (Id);

-- Reference: RoleAccess_Access (table: RoleAccess)
ALTER TABLE RoleAccess ADD CONSTRAINT RoleAccess_Access FOREIGN KEY RoleAccess_Access (AccessId)
    REFERENCES Access (Id);

-- Reference: RoleAccess_Role (table: RoleAccess)
ALTER TABLE RoleAccess ADD CONSTRAINT RoleAccess_Role FOREIGN KEY RoleAccess_Role (RoleId)
    REFERENCES Role (Id);

-- Reference: User_ArtisanType (table: User)
ALTER TABLE User ADD CONSTRAINT User_ArtisanType FOREIGN KEY User_ArtisanType (ArtisanTypeId)
    REFERENCES ArtisanType (Id);

-- Reference: User_Company (table: User)
ALTER TABLE User ADD CONSTRAINT User_Company FOREIGN KEY User_Company (CompanyId)
    REFERENCES Company (Id);

-- Reference: User_Role (table: User)
ALTER TABLE User ADD CONSTRAINT User_Role FOREIGN KEY User_Role (RoleId)
    REFERENCES Role (Id);

-- End of file.
