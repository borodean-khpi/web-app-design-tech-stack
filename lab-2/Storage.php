<?php

interface IStorage
{
}

class FileSystemStorage extends Singleton implements IStorage
{
}

class S3Storage extends Singleton implements IStorage
{
}
