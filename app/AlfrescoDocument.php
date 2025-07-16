<?php

	namespace App;

	use GuzzleHttp\Client;
	use Log;

	class AlfrescoDocument
	{
		// Get the user ticket
		public static function GetAlfrescoUserTicket()
	    {
	    	try
	    	{
	    		$client = new Client();
	    		$tokenRow = array();
				$tokenRow['username'] = env('DOCUMENT_USER');
	            $tokenRow['password'] = env('DOCUMENT_PASSWORD');
	    		$tokenURL = env('DOCUMENT_API').'/login';
	            $tokenResponse = $client->request('POST', $tokenURL, [
	                'headers' => [
	                    'Content-Type' => 'application/json',
	                    'Cache-Control' => 'no-cache',
	                    'Accept' => 'application/json'
	                ],
	                'body' => json_encode($tokenRow)
	            ])->getBody()->getContents();
	          
	            
	            $objtokenRes = json_decode($tokenResponse);
	            $userTicket = $objtokenRes->data->ticket;
	            return $userTicket;
	    	}
	    	catch(Exception $exc)
	    	{
	    		echo $exc;
	    	
	    	}
	    }

	    // Create new folder
	    public static function SetAlfrescoFolder($parentFolder, $folderName, $folderTitle, $folderDescription)
	    {
	    	try
	    	{
	    		
	    		$client = new Client();
	    		
	    		$ticket = self::GetAlfrescoUserTicket();
	    		$folderURL = env('DOCUMENT_API').'/site/folder/'.env('DOCUMENT_SITE').'/'.$parentFolder.'?alf_ticket='.$ticket;
	    		
	    		
	    		$folderData = array();
	    		$folderData['name'] = $folderName;
	    		$folderData['title'] = $folderTitle;
	    		$folderData['description'] = $folderDescription;
	    		$folderData['type'] = 'cm:folder';

	    		$folderResponse = $client->request('POST', $folderURL, [
	                'headers' => [
	                    'Content-Type' => 'application/json',
	                    'Cache-Control' => 'no-cache',
	                    'Accept' => 'application/json'
	                ],
	                'body' => json_encode($folderData)
	            ])->getBody()->getContents();
	            
	            $arrResponse = explode ('"', $folderResponse);
	            $folderPath = $arrResponse[3];
	            // echo $folderPath;exit;
	    		return $folderPath;
	    		 
	    	}
	    	catch(Exception $exc)
	    	{
                   
	    	}
	    }

	    // Create document
	    public static function SetAlfrescoDocument($fileDirPath, $fileName, $fileExtension, $fileDestination, $fileDescription)
	    {Log::info($fileDirPath.' : '.$fileName.' : '.$fileExtension.' : '.$fileDestination);

	    // Log::error('[Method => alfrescodocument_folder => file_result => success Code:'.$result.']');
	    	try
	    	{
	    		$mimeType = '';
		        switch ($fileExtension) {
		        	case 'xls':
		        		$mimeType = 'vnd.ms-excel';
		        		break;
		        	case 'xlsx':
		        		$mimeType = 'vnd.openxmlformats-officedocument.spreadsheetml.sheet';
		        		break;
		        	case 'doc':
		        		$mimeType = 'msword';
		        		break;
		        	case 'docx':
		        		$mimeType = 'vnd.openxmlformats-officedocument.wordprocessingml.document';
		        		break;
		        	case 'pdf':
		        		$mimeType = 'pdf';
		        		break;
		        	case 'jpeg':
		        		$mimeType = 'jpeg';
		        		break;
		        	case 'png':
		        		$mimeType = 'png';
		        		break;
		        	case 'ppt':
		        		$mimeType = 'vnd.ms-powerpoint';
		        		break;
		        	case 'pptx':
		        		$mimeType = 'vnd.openxmlformats-officedocument.presentationml.presentation';
		        		break;
		        	default:
		        		$mimeType = '';
		        		break;
		        }
		        $mimeType = 'content/'.$mimeType;
	    		$client = new Client();
	    		
	    		$ticket = self::GetAlfrescoUserTicket();
	    		$documentURL = env('DOCUMENT_API').'/upload?alf_ticket='.$ticket;

	    		$fileURL = $fileDirPath.'/'.$fileName;//echo $fileURL;exit;
	    	
	    		$curl_request = curl_init();
	    		// Log::info($fileURL);
		        curl_setopt($curl_request, CURLOPT_POST,true);
				curl_setopt($curl_request, CURLOPT_URL, $documentURL);
				curl_setopt($curl_request, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($curl_request, CURLOPT_HEADER, false);
				$args = curl_file_create($fileURL,$mimeType,$fileName);
				curl_setopt($curl_request, CURLOPT_POSTFIELDS, array('destination'=>$fileDestination,'filedata'=>$args,'description'=>$fileDescription));
				$result = curl_exec($curl_request);
				Log::info($documentURL);
				

		   		return $result;
	    	}
	    	catch(Exception $exc)
	    	{
	    		
	    	}
	    }
	}